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
    
    public function action_acceptguestbookitem()
    {
        
        $query  = $this->request->query();
        
        $id     = $query['id'];
        $key    = $query['key'];
        
        if($key == App::generate_guestbook_key($id)){
            $gbi = ORM::factory('Guestbookitem', $id);
            if($gbi->loaded()){
                $gbi->accepted = 1;
                $gbi->save();
                die('Bericht is geaccepteerd.');
            }
        } else {
            die('Onjuiste key!');
        }
        
    }
    
    public function after(){
        
        $this->template->content    = $this->content;
        $this->template->content_right   = $this->content_right;
        $this->template->title      = $this->title;
        
        $this->response->body($this->template->render());
        
        parent::after();
    }
    
}