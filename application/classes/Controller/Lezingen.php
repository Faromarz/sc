<?php

Class Controller_Lezingen extends Controller_Main {
    
    public $title = 'Lezingen - Soul-Coaching';
    
    public function action_index()
    {
        $this->content = View::factory('site/lezingen');
        $this->content->items = ORM::factory('Agendaitem')
                                    ->order_by('date', 'DESC')
                                    ->find_all();
        $this->content_right = View::factory('site/lezingen_r');
    }
    
}