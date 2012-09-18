<?php

/**
 * Backend pour site web.
 */
class Controller_Backend extends Controller {

    private $api_key = "4fe68cb34be5a23a8e87d4c1faedb3a3cb68cb93";

    public function before() {

        if (sha1($this->request->param('key')) != $this->api_key)
            throw new Kohana_Exception("Wrong api key, access denied.");
    }

    /**
     * Envoie les courriels en attente
     */
    public function action_status() {
        $view = View::factory('backend/status');
        $view->backend = Backend::instance($this->api_key);
        $this->response->body($view);
    }

    public function action_start() {
        $delay = time();
        $unit_name = $this->request->param('unit');
        if ($unit_name !== NULL) {

            Backend::instance($this->api_key)->execute($unit_name);
        } else {
            // Start all units
            Backend::instance($this->api_key)->start();
        }
        $delay = time() - $delay;
        $this->response->body("All units have been executed in $delay.");
    }

    public function action_stop() {
        Backend::instance($this->api_key)->stop();
        $this->response->body('All units have been executed.');
    }

    public function action_kill() {

        $this->response->body('All units have been executed.');
    }

}

?>
