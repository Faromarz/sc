<?php

Class Controller_Agenda extends Controller_Main {
    
    public $title = 'Agenda - Soul-Coaching';
    
    public function action_index()
    {
        $this->content = View::factory('site/agenda');
        $this->content->items = ORM::factory('Agendaitem')
                                    ->order_by('date', 'DESC')
                                    ->find_all();
        $this->content_right = View::factory('site/agenda_r');
    }
    
}