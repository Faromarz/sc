<?php

Class Controller_Contact extends Controller_Main {
    
    public $title = 'Contact - Soul-Coaching';
    
    public function action_index()
    {
        $this->content = View::factory('site/contact');
        $this->content_right = View::factory('site/contact_r');
    }
    
    public function action_gastenboek()
    {
        
        if($_POST){
            $post = $this->request->post();
            
            $guestbookitem = ORM::factory('Guestbookitem');
            
            $guestbookitem->ip = $_SERVER['REMOTE_ADDR'];
            $guestbookitem->name = $post['gb_name'];
            $guestbookitem->text = $post['gb_text'];
            $guestbookitem->save();
            
            $body       = View::factory('mail/acceptguestbookitem');
            $body->gbi  = $guestbookitem;
            $body       = $body->render();
            $to         = $this->config['admin_email'];
            
            $email      = new Email();
            
            $email
                    ->setBody($body)
                    ->setFromDefault()
                    ->setTo($this->config['admin_email'])
                    ->setSubject('Nieuwe reactie Soul-Coaching')
                    ->send();
            
        }
        
        $this->content = View::factory('site/gastenboek');
        $this->content->items = ORM::factory('Guestbookitem')
                                    ->where('accepted', '=', 1)
                                    ->order_by('timestamp', 'DESC')
                                    ->limit(250)
                                    ->find_all();
        
        $this->content_right = '';
    }
    
}