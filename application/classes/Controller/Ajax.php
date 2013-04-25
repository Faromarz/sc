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
        
        $body->agendaitem = ORM::factory('Agendaitem', $post['id']);
        $body->first_name    = $post['first_name'];
        $body->last_name    = $post['last_name'];
        $body->address      = $post['address'];
        $body->postalcode = $post['postalcode'];
        $body->city         = $post['city'];
        $body->phone        = $post['phone'];
        $body->age          = $post['age'];
        $body->gender       = $post['gender'];
        $body->email    = $post['email'];
        $body->persons    = $post['persons'];
        $body->comments    = $post['comments'];
        $body->date    = $post['date'];
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
    
    public function action_send_newsletter_mail()
    {
        
        $post = $this->request->post();
        
        $body       = View::factory('mail/newsletter_signup');
        
        $body->name    = $post['name'];
        $body->email    = $post['email'];
        $body->city    = $post['city'];
        
        $body       = $body->render();
        $to         = $this->config['admin_email'];
        
        $email      = new Email();

        $email
                ->setBody($body)
                ->setFromDefault()
                ->setTo($this->config['admin_email'])
                ->setSubject('Nieuwsbrief aanmelding Soul-Coaching')
                ->send();
        
        $this->response->body(1);
        
    }
    
}