<?php

defined('SYSPATH') or die('No direct script access.');

abstract class Unit {

    /**
     *
     * @var Thread 
     */
    private $_thread;
    private $_is_running;

    /**
     *
     * @var String 
     */
    private $_api_key;

    // For non-threaded run

    public function __construct($api_key) {

        $this->_api_key = $api_key;

        $this->_is_running = true;

        if (Thread::available()) {

            function run(Unit $unit) {
                while (Backend::instance($unit->_api_key)->running_state() === Backend::RUNNING) {
                    $unit->run();
                    sleep($unit->interval());
                }
            }

            $this->_thread = new Thread('run', array($this));
        }
    }

    /**
     * 
     */
    public abstract function interval();

    /**
     * 
     */
    public abstract function name();

    /**
     * 
     */
    public abstract function run();

    /**
     * Start the unit's thread.
     * DO NOT CALL THIS FUNCTION IF THREAD IS NOT AVAILABLE !
     * @return type
     */
    public function start() {

        return $this->_thread->start();
    }

    public function is_running() {

        return Thread::available() ? $this->_thread->isAlive() : $this->_is_running;
    }

    /**
     * 
     * @return Boolean true if unit has stopped, false if otherwise.
     */
    public function stop() {
        $this->_is_running = false;

        return Thread::available ? $this->_thread->stop() : !$this->is_running();
    }

}

?>
