<?php

Class Controller_Contact extends Controller_Main {
    
    public $title = 'Contact - Soul-Coaching';
    
    public function action_index()
    {
        $this->content = View::factory('site/contact');
        $this->content_right = View::factory('site/contact_r');
    }
    
    public function action_nieuwsbrief()
    {
        $this->content = View::factory('site/nieuwsbrief');
    }
    
    public function action_tarieven()
    {
        $this->title = 'Tarieven - Soul-Coaching';
        $this->content = View::factory('site/tarieven');
    }
    
    public function action_gastenboek()
    {
        
        $captcha = Captcha::instance();
        
        $this->content = View::factory('site/gastenboek');
        
        if(isset($_POST['gb_text'])){
            
            if(!Captcha::valid($_POST['gb_captcha'])){
                $this->content->captcha_error = 1;
                $this->content->postdata = $_POST;
            } else {
                
                $this->content->success = 1;
                $post = $this->request->post();

                $guestbookitem = ORM::factory('Guestbookitem');

                $guestbookitem->ip = $_SERVER['REMOTE_ADDR'];
                $guestbookitem->name = $post['gb_name'];
                $guestbookitem->text = $post['gb_text'];
                $guestbookitem->save();
            }
            
        }
        
        $this->content->captcha = $captcha;
        $this->content->items = ORM::factory('Guestbookitem')
                                    ->where('accepted', '=', 1)
                                    ->order_by('timestamp', 'DESC')
                                    ->limit(250)
                                    ->find_all();
        
        $this->content_right = View::factory('site/gastenboek_r');
    }
    
}