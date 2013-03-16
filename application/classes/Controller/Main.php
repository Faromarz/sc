<?php

Class Controller_Main extends Controller {
    
    public $template = NULL;
    public $content = '';
    public $content_right = '';
    public $title = 'Soul-Coaching';
    public $config = NULL;
    
    public function before(){
        parent::before();
        
        $this->config = Kohana::$config->load('app');
        View::bind_global('config', $this->config);
        $this->template = View::factory('template');
        
    }
    
    public function action_index()
    {
        $this->content = View::factory('site/index');
        $this->content_right = View::factory('site/index_r');
    }
    
    public function action_acceptguestbookitem()
    {
        
        $query  = $this->request->query();
        
        $id     = $query['id'];
        $key    = $query['key'];
        
        if($key == App::generate_guestbook_key($id)){
            $gbi = ORM::factory('guestbookitem', $id);
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