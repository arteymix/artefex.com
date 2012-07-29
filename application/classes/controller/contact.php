<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Contact extends Controller_Default {
	
	

	protected $content = "contact";
    
    
    public function action_index() {
        
        if($this->request->method() === HTTP_Request::POST) {
            $validate = Validation::factory($_POST)
                ->rule("nom", "not_empty")
                ->rule("message", "max_length", array(":value" => 40))
                ->rule("message", "not_empty")
                ->rule("message", "max_length", array(":value" => 400))
                ->rule("email", "not_empty")
                ->rule("email", "email");
            
            if($validate->check()) {
                mail("", $this->request->post("message"));
            }
        }
        
    }
} // End Welcome

