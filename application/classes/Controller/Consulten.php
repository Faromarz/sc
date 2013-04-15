<?php

Class Controller_Consulten extends Controller_Main {
    
    public $title = 'Informatie - Soul-Coaching';
    
    public function action_reconnectivehealing()
    {
        $this->title = 'Reconnective Healing - Soul-Coaching';
        $this->content = View::factory('site/reconnectivehealing');
    }
    
    public function action_kosmischeintelligentie()
    {
        $this->title = 'Kosmische Intelligentie - Soul-Coaching';
        $this->content = View::factory('site/kosmischeintelligentie');
    }
    
}