<?php

Class App {
    
    public static function generate_guestbook_key($guestbook_id){
        
        $string = Kohana::$config->load('app.key').'_guestbookitem_'.$guestbook_id;
        return sha1($string);
        
    }
    
}