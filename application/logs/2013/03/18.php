<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-18 06:51:52 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Agendaite,' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-03-18 06:51:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-18 06:58:17 --- CRITICAL: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\Kohana\Auth.php [ 155 ] in C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\auth\classes\Kohana\Auth.php:143
2013-03-18 06:58:17 --- DEBUG: #0 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\auth\classes\Kohana\Auth.php(143): Kohana_Auth->hash('Wachtwoord')
#1 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\application\classes\Controller\Dev.php(8): Kohana_Auth->hash_password('Wachtwoord')
#2 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Controller.php(84): Controller_Dev->action_generate_password()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dev))
#5 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\index.php(120): Kohana_Request->execute()
#8 {main} in C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\auth\classes\Kohana\Auth.php:143
2013-03-18 06:59:59 --- CRITICAL: ErrorException [ 1 ]: Access to undeclared static property: Auth::$hash ~ APPPATH\bootstrap.php [ 142 ] in :
2013-03-18 06:59:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-18 06:59:59 --- CRITICAL: ErrorException [ 1 ]: Access to undeclared static property: Auth::$hash ~ APPPATH\bootstrap.php [ 142 ] in :
2013-03-18 06:59:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-18 07:21:39 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\Controller\Main.php [ 16 ] in C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\application\classes\Controller\Main.php:16
2013-03-18 07:21:39 --- DEBUG: #0 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\application\classes\Controller\Main.php(16): Kohana_Core::error_handler(2048, 'Only variables ...', 'C:\Users\Tom La...', 16, Array)
#1 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\index.php(120): Kohana_Request->execute()
#7 {main} in C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\application\classes\Controller\Main.php:16
2013-03-18 07:21:57 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\Main.php [ 16 ] in :
2013-03-18 07:21:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-18 08:05:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\views\admin\editor.php [ 4 ] in :
2013-03-18 08:05:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :