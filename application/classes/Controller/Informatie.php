<?php

Class Controller_Informatie extends Controller_Main {
    
    public $title = 'Informatie - Soul-Coaching';
    
    public function action_home()
    {
        $this->title = 'Soul-Coaching - Praktijk voor Spiritueel Life Coaching';
        $this->content = View::factory('site/home');
        $this->content_right = View::factory('site/home_r');
    }
    
    public function action_essentie()
    {
        $this->title = 'De Essentie - Soul-Coaching';
        $this->content = View::factory('site/essentie');
        $this->content_right = View::factory('site/essentie_r');
    }
    
    public function action_lichteninformatie()
    {
        $this->title = 'Licht en Informatie - Soul-Coaching';
        $this->content = View::factory('site/lichteninformatie');
        $this->content_right = View::factory('site/lichteninformatie_r');
    }
    
    public function action_padvanzelfontwikkeling()
    {
        $this->title = 'Pad van Zelfontwikkeling - Soul-Coaching';
        $this->content = View::factory('site/padvanzelfontwikkeling');
    }
    
}