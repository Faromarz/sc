<?php

Class Controller_Hoehetwerkt extends Controller_Main {
    
    public $title = 'Hoe het werkt - Soul-Coaching';
    
    public function action_essentie()
    {
        $this->title = 'Soul-Coaching - Praktijk Voor Spiritueel Life Coaching';
        $this->content = View::factory('site/essentie');
        $this->content_right = View::factory('site/essentie_r');
    }
    
    public function action_lichteninformatie()
    {
        $this->title = 'Licht en Informatie - Soul-Coaching';
        $this->content = View::factory('site/lichteninformatie');
    }
    
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
    
    public function action_waarkunjeaanwerken()
    {
        $this->title = 'Waar kun je aan werken - Soul-Coaching';
        $this->content = View::factory('site/waarkunjeaanwerken');
    }
    
}