<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-20 21:28:39 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Cookie.php:67
2013-02-20 21:28:39 --- DEBUG: #0 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('Kohana_Session', NULL)
#1 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('Kohana_Session')
#2 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Cookie.php:67
2013-02-20 21:28:39 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Cookie.php:67
2013-02-20 21:28:39 --- DEBUG: #0 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('Kohana_Session', NULL)
#1 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('Kohana_Session')
#2 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Cookie.php:67
2013-02-20 21:29:13 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::rende() ~ APPPATH\classes\Controller\Main.php [ 24 ] in :
2013-02-20 21:29:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :