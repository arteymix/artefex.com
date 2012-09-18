

<?php

defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Default extends Controller_Template {

    public $template = "layout/template";
    protected $head = "layout/head";
    protected $header = "layout/header";
    private $menus = array(
        'accueil' => 'Accueil',
        'projets' => 'Projets',
        'contact' => 'Contact',
        'about' => 'À propos');
    private $footer_menus = array(
        'Navigation' => array(
            'accueil' => 'Accueil',
            'projets' => 'Projets',
            'contact' => 'Contact',
            'about' => 'À propos'
        ),
        'Programmation' => array(
       'programmation#libre' => 'Libre et open-source',
                'programmation#kohana' => 'Frameworks',
                'programmation#git' => 'Gestion de version'
        ),
        'Gestion de projets' => array(
          'projets#web' => 'Projets web',
                'projets#logiciels' => 'Logiciels',
                'projets#serveur' => 'Configuration de serveur',
        ),
        'À propos' => array(
            'blog' => 'Blog',
            'about#equipe' => 'Notre équipe',
            'about#partenaires' => 'Partenaires',
        ),
    );
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
        $this->header->menus = $this->menus;
        $this->template->header = $this->header;
        $this->template->content = $this->content;
        $this->footer->footer_menus = $this->footer_menus;

        $this->template->footer = $this->footer;
        parent::after();
    }

}

// End Welcome

