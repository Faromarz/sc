<?php

Class Controller_Main extends Controller {
    
    public $template        = NULL;
    public $content         = '';
    public $content_right   = '';
    public $title           = 'Soul-Coaching';
    public $config          = NULL;
    public $auth            = NULL;
    
    public function before(){
        parent::before();
        
        $this->auth     = Auth::instance();
        $logged_in = $this->auth->logged_in();
        View::bind_global('logged_in', $logged_in);
        $this->config   = Kohana::$config->load('app');
        View::bind_global('config', $this->config);
        $this->template = View::factory('template');
        
    }
    
    public function after(){
        
        $this->template->content    = $this->content;
        $this->template->content_right   = $this->content_right;
        $this->template->title      = $this->title;
        
        $this->response->body($this->template->render());
        
        parent::after();
    }
    
}