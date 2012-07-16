<?php defined('SYSPATH') or die('No direct script access.');
error_reporting(E_ALL);
ini_set('display_errors', '1');
class Wordpress {
        
    protected $wordpress_path;
    
    public function __construct($path){
        $this->wordpress_path = $path;
        
        
        
    }
    
   public function render() {
       return file_get_contents("http://localhost" . URL::base() . $this->wordpress_path);
        
   }     
}

class Controller_Wordpress extends Controller_Default {
	
    protected $wordpress;
	
    public function before() {
        parent::before();
        $this->wordpress = new Wordpress("wordpress/index.php");
        
    }
    
    public function after() {
        
        parent::after();
        
    }
	protected $content = "projets";
} // End Welcome

