<?php

Class Controller_Admin extends Controller_Main {
    
    public function before(){
        parent::before();
        if(!$this->auth->logged_in() && ($this->request->action() !== 'login' && $this->request->action() !== 'logout')){
            HTTP::redirect('admin/login');
            exit();
        }
        $this->template = View::factory('admin/template');
    }
    
    public function action_index()
    {
        
        $this->content = View::factory('admin/editor');
        $subjects = array('0' => '-- Selecteer een onderwerp --');
        $result = DB::select()->from('content')->execute();
        foreach($result as $item){
            $subjects[$item['id']] = $item['description'];
        }
        $this->content->subjects = $subjects;
        $this->content->subject_selected = NULL;
        
    }
    
    public function action_login()
    {
        $error = false;
        if(isset($_POST['username'])){
            $post = $this->request->post();
            
            if($this->auth->login($post['username'], $post['password'])){
                HTTP::redirect('admin');
            } else {
                $error = true;
            }
            
        }
        
        $this->content = View::factory('admin/login');
        $this->content->error = $error;
    }
    
    public function action_logout()
    {
        
        $this->auth->logout();
        HTTP::redirect('/');
        
    }
    
}