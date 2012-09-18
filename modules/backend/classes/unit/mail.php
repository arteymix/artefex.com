<?php
defined('SYSPATH') or die('No direct script access.');
/**
 * Sample unit
 */
class Unit_Mail extends Unit {
    
    private $i = 0;
    
    
    public function interval() {
        return 1;
    }

    public function name() {
        return 'mail';
    }

    public function run() {
        if($this->i == 5) {
           die('Lol'
                
                ); 
            
        }
        $this->i++;
        
    }

   
}

?>
