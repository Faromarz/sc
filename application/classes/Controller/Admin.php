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
        
        $success = false;
        
        $id                 = $this->request->query('id');
        $subject_selected   = NULL;
        
        if($id!== NULL){
            $result = DB::select()->from('content')->where('id', '=', $id)->limit(1)->as_object()->execute();
            
            if($result->count()){
                $subject_selected = $result->current();
                
                if(isset($_POST['content'])){
                    DB::update('content')->set(array('content' => $this->request->post('content')))->where('id', '=', $subject_selected->id)->execute();
                    $success = true;
                    $subject_selected->content = $this->request->post('content');
                }

            }
            
        }
        
        $this->content = View::factory('admin/editor');
        $subjects = array('0' => '-- Selecteer een onderwerp --');
        $result = DB::select()->from('content')->execute();
        foreach($result as $item){
            $subjects[$item['id']] = $item['description'];
        }
        
        $this->content->success = $success;
        $this->content->subjects = $subjects;
        $this->content->subject_selected = $subject_selected;
        
    }
    
    public function action_lezingen()
    {
        $success = false;
        
        $id                 = $this->request->param('id');
        
        if($id===NULL){
            
            $this->content = View::factory('admin/list_agendaitems');
            $this->content->agendaitems = ORM::factory('Agendaitem')->find_all();
            
        } else {
            
            if($id===0){
                $agendaitem = ORM::factory('Agendaitem');
            } else {
                $agendaitem = ORM::factory('Agendaitem', $id);
            }
            
            if(isset($_GET['delete'])){
                ORM::factory('Agendaitem', $id)->delete();
                HTTP::redirect('admin/lezingen?success=1');
                die();
            } else {
                
                if(isset($_POST['title'])){
                    
                    $agendaitem->title = $_POST['title'];
                    $agendaitem->date = $_POST['date'];
                    $agendaitem->time = $_POST['time'];
                    $agendaitem->info = $_POST['info'];
                    
                    $agendaitem->save();
                    
                    HTTP::redirect('admin/lezingen?success=1');
                    
                }
                
                $this->content = View::factory('admin/edit_agendaitem');
                $this->content->item = $agendaitem->reload();
            }
        }
        
    }
    
    public function action_guestbook()
    {
        
        if($this->request->param('id') && $this->request->param('id2')){
            $item  = ORM::factory('Guestbookitem', $this->request->param('id'));
            if(!$item->loaded()){
                throw new Kohana_Exception('Niet gevonden');
            }
            if($this->request->param('id2') == 'deny'){
                $item->accepted = -1;
            } elseif ($this->request->param('id2') == 'accept') {
                $item->accepted = 1;
            } else {
                throw new Kohana_Exception('Que?');
            }
            
            $item->save();
            HTTP::redirect('admin/guestbook?success=1');
        }
        
        $this->content = View::factory('admin/guestbook');
        $this->content->items = ORM::factory('Guestbookitem')->where('accepted', '=', 0)->find_all();
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