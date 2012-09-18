<?php

class Kohana_Backend {

    protected static $_instances = array();

    /**
     * 
     * @param type $name
     * @return Kohana_Backend
     */
    public static function instance($api_key) {
        return array_key_exists($api_key, Backend::$_instances) ? Backend::$_instances[$api_key] : Backend::$_instances[$api_key] = new Backend($api_key);
    }

    const
            SHM_KEY_STATE = 46578,
            RUNNING = 1,
            STOPPED = 2;

    private $_config;
    private $_api_key;
    private $_semaphore_id;
    private $_shared_memory_id;
    private $_units = array();

    private function __construct($api_key) {

// One semaphore by backend's instance name. So multiple backend from $_instances.

        $this->_api_key = $api_key;
        $this->_semaphore_id = sem_get(hexdec(sha1($this->_api_key)));

        if (!sem_acquire($this->_semaphore_id)) {
            throw new Kohana_Exception("Couldn't acquire a semaphore !");
        }

        $this->_shared_memory_id = shm_attach(hexdec(sha1($this->_api_key)));

        $this->_config = Kohana::$config->load('backend.default');

        foreach ($this->_config["units"] as $unit) {
            $r = new ReflectionClass($unit);


            $this->register_unit($r->newInstanceArgs(array($this->_api_key)));
        }
    }

    public function __destruct() {
        sem_release($this->_semaphore_id);
        shm_detach($this->_shared_memory_id);
    }

    public function name() {
        return $this->_api_key;
    }

    public function units() {
        return $this->_units;
    }

    public function interval() {
        throw new Kohana_Exception("Calling interval on a backend has no meaning.");
    }

////////////////////////////////////////////////////////////////////////////
// Work on single unit

    /**
     * Enregistre une unité. Cette unité sera executé à l'appel de run().
     * @param Unit $unit
     */
    public function register_unit(Unit $unit) {
        $this->_units[sha1($unit->name())] = $unit;
    }

    /**
     * Run a single unit (not in a thread !)
     */
    public function execute($unit_name) {

        $this->_units[sha1($unit_name)]->run();
    }

    /**
     * État du backend. La variable est prise depuis la mémoire partagée alors
     * elle est universelle à tous les processus.
     * @return type
     * @throws Kohana_Exception
     */
    public function running_state() {
        //if (!$this->is_running())
        //    throw new Kohana_Exception("Running state has no meaning if the backend is not running.");


        if (shm_has_var($this->_shared_memory_id, Backend::SHM_KEY_STATE)) {

            return shm_get_var($this->_shared_memory_id, Backend::SHM_KEY_STATE);
        } else {
            return Backend::STOPPED;
        }
    }

    /**
     * Détermine si les threads des units du backend roulent.
     * @return boolean
     */
    private function is_running() {

        foreach ($this->_units as $unit) {
            if ($unit->is_running()) {
                return true;
            }
        }

        return false;
    }

    /**
     * Start the backend.
     * @throws Kohana_Exception
     */
    public function start() {
        



        shm_put_var($this->_shared_memory_id, Backend::SHM_KEY_STATE, Backend::RUNNING);

        if (Thread::available()) {
            foreach ($this->_units as $unit) {
                $unit->start();
            }
            $this->wait();
        } else {
            while ($this->running_state() === Backend::RUNNING) {
                $at_least_one_unit_active = false;
                foreach ($this->_units as $unit) {
                    if ($unit->is_running()) {
                        $at_least_one_unit_active = true;
                        $unit->run();
                        sleep($unit->interval());
                    }
                    if (!$at_least_one_unit_active) {
                        // All units are stopped, we can stop the backend.
                        shm_put_var($this->_shared_memory_id, Backend::SHM_KEY_STATE, Backend::STOPPED);
                    }
                }
            }
        }
    }

    /**
     * Wait until all threads (active units) die.
     * @param type $delay if waiting takes more time than the specified delay,
     * an exception will be returned.
     * @param type $interval is the time to wait after having checked the 
     * threads states.
     */
    public function wait($delay = 1000, $interval = 1) {

        while ($this->is_running())
            sleep($interval);
    }

    /**
     * Stop the backend.
     * @throws Kohana_Exception
     */
    public function stop() {
        if (!$this->is_running())
            throw new Kohana_Exception('Backend is not running.');



// Si ça run, on peut récupérer la portion de shm
// On avertit le backend qu'il ne doit plus rouler.
        shm_put_var($this->_shared_memory_id, Backend::SHM_KEY_STATE, Backend::STOPPED);

// On attend que les threads crèvent.
        $this->wait();
    }

}

?>
