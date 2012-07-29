
<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Blog extends Controller_Wordpress {
	
	

	protected $content = "blog";
    
    public function after() {
        
        
        
        $this->content->wordpress = $this->wordpress->render();
        parent::after();
    }
} // End Welcome


