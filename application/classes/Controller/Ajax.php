<?php

Class Controller_Ajax extends Controller {
    
    public $config          = NULL;
    
    public function before(){
        parent::before();
        
        $this->config   = Kohana::$config->load('app');
        View::bind_global('config', $this->config);
        
    }
    
    public function action_send_agenda_mail()
    {
        
        $post = $this->request->post();
        
        $body       = View::factory('mail/agenda_signup');
        
        $body->agendaitem = ORM::factory('agendaitem', $post['id']);
        $body->name    = $post['name'];
        $body->email    = $post['email'];
        $body->persons    = $post['persons'];
        $body->comments    = $post['comments'];
        
        $body       = $body->render();
        $to         = $this->config['admin_email'];
        
        $email      = new Email();

        $email
                ->setBody($body)
                ->setFromDefault()
                ->setTo($this->config['admin_email'])
                ->setSubject('Nieuwe aanmelding Soul-Coaching')
                ->send();
        
        $this->response->body(1);
        
    }
    
}