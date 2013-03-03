<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-03 11:19:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content_right ~ APPPATH\views\template.php [ 36 ] in C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\application\views\template.php:36
2013-03-03 11:19:35 --- DEBUG: #0 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\application\views\template.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Tom La...', 36, Array)
#1 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\View.php(61): include('C:\Users\Tom La...')
#2 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Users\Tom La...', Array)
#3 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\application\classes\Controller\Main.php(27): Kohana_View->render()
#4 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Controller.php(87): Controller_Main->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\index.php(118): Kohana_Request->execute()
#10 {main} in C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\application\views\template.php:36