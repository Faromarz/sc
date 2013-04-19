<?php

Class Controller_Consulten extends Controller_Main {
    
    public $title = 'Informatie - Soul-Coaching';
    
    public function action_coaching()
    {
        $this->title = 'Coaching - Soul-Coaching';
        $this->content = View::factory('site/coaching');
        $this->content_right = View::factory('site/coaching_r');
    }
    
    public function action_reconnectivehealing()
    {
        $this->title = 'Reconnective Healing - Soul-Coaching';
        $this->content = View::factory('site/reconnectivehealing');
        $this->content_right = View::factory('site/reconnectivehealing_r');
    }
    
    public function action_kosmischeintelligentie()
    {
        $this->title = 'Kosmische Intelligentie - Soul-Coaching';
        $this->content = View::factory('site/kosmischeintelligentie');
        $this->content_right = View::factory('site/kosmischeintelligentie_r');
    }
    
}