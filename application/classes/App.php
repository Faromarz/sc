<?php

Class App {
    
    public static function generate_guestbook_key($guestbook_id){
        
        $string = Kohana::$config->load('app.key').'_guestbookitem_'.$guestbook_id;
        return sha1($string);
        
    }
    
    public static function get_content($name)
    {
        
        $content = DB::select()->from('content')->where('name', '=', $name)->limit(1)->as_object()->execute();
        if($content->count()){
            return $content->current()->content;
        } else {
            return '';
        }
    }
    
}