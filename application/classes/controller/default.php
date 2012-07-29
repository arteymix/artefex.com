

<?php

defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Default extends Controller_Template {

	public $template = "layout/template";
	protected $head = "layout/head";
	protected $header = "layout/header";
	protected $content;
	protected $footer = "layout/footer";

	public function before() {
		parent::before();
		$this->head = new View($this->head);
		$this->header = new View($this->header);
		$this->content = new View($this->content);
		$this->footer = new View($this->footer);
	}

	public function action_index() {
		
	}

	public function after() {
		$this->template->head = $this->head;
        $this->header->name = $this->request->controller();
        
		$this->template->header = $this->header;
		$this->template->content = $this->content;
        $this->footer->name = $this->request->controller();
		$this->template->footer = $this->footer;
		parent::after();
	}

}

// End Welcome

