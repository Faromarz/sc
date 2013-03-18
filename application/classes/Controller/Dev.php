<?php

Class Controller_Dev extends Controller {
    
    public function before()
    {
        parent::before();
        
        if(Kohana::$environment !== Kohana::DEVELOPMENT){
            HTTP_Exception::factory(404);
            die();
        }
        
    }
    
    public function action_generate_password() {
        
        $auth = Auth::instance();
        echo $auth->hash_password('Wachtwoord');
        
    }
    
    public function action_login() {
        
        $auth = Auth::instance();
        
        echo $auth->logged_in() ? 'Was ingelogd -> ' : 'Was niet ingelogd -> ';
        
        echo $auth->login('albertine', 'Wachtwoord') ? 
                'Ingelogd' : 
                'Niet ingelogd';
        
    }
    
}