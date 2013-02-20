<?php

Class Controller_Main extends Controller {
    
    public $template = NULL;
    public $content = '';
    public $title = 'Soul-Coaching';
    
    public function before(){
        parent::before();
        
        $this->template = View::factory('template');
        
    }
    
    public function action_index()
    {
        $this->content = View::factory('site/index');
    }
    
    public function after(){
        
        $this->template->content    = $this->content;
        $this->template->title      = $this->title;
        
        $this->response->body($this->template->render());
        
        parent::after();
    }
    
}