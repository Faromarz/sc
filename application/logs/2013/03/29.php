<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-29 12:03:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: lezing ~ APPPATH\views\admin\list_lezingen.php [ 13 ] in D:\Documenten\Websites\sc\application\views\admin\list_lezingen.php:13
2013-03-29 12:03:32 --- DEBUG: #0 D:\Documenten\Websites\sc\application\views\admin\list_lezingen.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Documenten\W...', 13, Array)
#1 D:\Documenten\Websites\sc\system\classes\Kohana\View.php(61): include('D:\Documenten\W...')
#2 D:\Documenten\Websites\sc\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\Documenten\W...', Array)
#3 D:\Documenten\Websites\sc\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\Documenten\Websites\sc\application\views\admin\template.php(39): Kohana_View->__toString()
#5 D:\Documenten\Websites\sc\system\classes\Kohana\View.php(61): include('D:\Documenten\W...')
#6 D:\Documenten\Websites\sc\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\Documenten\W...', Array)
#7 D:\Documenten\Websites\sc\application\classes\Controller\Main.php(51): Kohana_View->render()
#8 D:\Documenten\Websites\sc\system\classes\Kohana\Controller.php(87): Controller_Main->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\Documenten\Websites\sc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 D:\Documenten\Websites\sc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\Documenten\Websites\sc\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\Documenten\Websites\sc\index.php(120): Kohana_Request->execute()
#14 {main} in D:\Documenten\Websites\sc\application\views\admin\list_lezingen.php:13
2013-03-29 12:13:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: agendaitem ~ APPPATH\views\admin\edit_agendaitem.php [ 6 ] in D:\Documenten\Websites\sc\application\views\admin\edit_agendaitem.php:6
2013-03-29 12:13:20 --- DEBUG: #0 D:\Documenten\Websites\sc\application\views\admin\edit_agendaitem.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Documenten\W...', 6, Array)
#1 D:\Documenten\Websites\sc\system\classes\Kohana\View.php(61): include('D:\Documenten\W...')
#2 D:\Documenten\Websites\sc\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\Documenten\W...', Array)
#3 D:\Documenten\Websites\sc\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\Documenten\Websites\sc\application\views\admin\template.php(39): Kohana_View->__toString()
#5 D:\Documenten\Websites\sc\system\classes\Kohana\View.php(61): include('D:\Documenten\W...')
#6 D:\Documenten\Websites\sc\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\Documenten\W...', Array)
#7 D:\Documenten\Websites\sc\application\classes\Controller\Main.php(51): Kohana_View->render()
#8 D:\Documenten\Websites\sc\system\classes\Kohana\Controller.php(87): Controller_Main->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\Documenten\Websites\sc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 D:\Documenten\Websites\sc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\Documenten\Websites\sc\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\Documenten\Websites\sc\index.php(120): Kohana_Request->execute()
#14 {main} in D:\Documenten\Websites\sc\application\views\admin\edit_agendaitem.php:6
2013-03-29 12:26:51 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete agendaitem model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1431 ] in D:\Documenten\Websites\sc\application\classes\Controller\Admin.php:72
2013-03-29 12:26:51 --- DEBUG: #0 D:\Documenten\Websites\sc\application\classes\Controller\Admin.php(72): Kohana_ORM->delete()
#1 D:\Documenten\Websites\sc\system\classes\Kohana\Controller.php(84): Controller_Admin->action_lezingen()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\Documenten\Websites\sc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 D:\Documenten\Websites\sc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\Documenten\Websites\sc\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\Documenten\Websites\sc\index.php(120): Kohana_Request->execute()
#7 {main} in D:\Documenten\Websites\sc\application\classes\Controller\Admin.php:72
2013-03-29 12:29:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\Controller\Admin.php [ 90 ] in :
2013-03-29 12:29:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-29 12:29:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\Controller\Admin.php [ 90 ] in :
2013-03-29 12:29:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-29 12:29:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\Controller\Admin.php [ 90 ] in :
2013-03-29 12:29:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-29 12:30:13 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete agendaitem model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1431 ] in D:\Documenten\Websites\sc\application\classes\Controller\Admin.php:72
2013-03-29 12:30:13 --- DEBUG: #0 D:\Documenten\Websites\sc\application\classes\Controller\Admin.php(72): Kohana_ORM->delete()
#1 D:\Documenten\Websites\sc\system\classes\Kohana\Controller.php(84): Controller_Admin->action_lezingen()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\Documenten\Websites\sc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 D:\Documenten\Websites\sc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\Documenten\Websites\sc\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\Documenten\Websites\sc\index.php(120): Kohana_Request->execute()
#7 {main} in D:\Documenten\Websites\sc\application\classes\Controller\Admin.php:72
2013-03-29 12:40:52 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Ajax::$config ~ APPPATH\classes\Controller\Ajax.php [ 12 ] in D:\Documenten\Websites\sc\application\classes\Controller\Ajax.php:12
2013-03-29 12:40:52 --- DEBUG: #0 D:\Documenten\Websites\sc\application\classes\Controller\Ajax.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\Documenten\W...', 12, Array)
#1 D:\Documenten\Websites\sc\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_send_agenda_mail()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\Documenten\Websites\sc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 D:\Documenten\Websites\sc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\Documenten\Websites\sc\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\Documenten\Websites\sc\index.php(120): Kohana_Request->execute()
#7 {main} in D:\Documenten\Websites\sc\application\classes\Controller\Ajax.php:12
2013-03-29 12:40:52 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Ajax::$config ~ APPPATH\classes\Controller\Ajax.php [ 12 ] in D:\Documenten\Websites\sc\application\classes\Controller\Ajax.php:12
2013-03-29 12:40:52 --- DEBUG: #0 D:\Documenten\Websites\sc\application\classes\Controller\Ajax.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\Documenten\W...', 12, Array)
#1 D:\Documenten\Websites\sc\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_send_agenda_mail()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\Documenten\Websites\sc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 D:\Documenten\Websites\sc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\Documenten\Websites\sc\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\Documenten\Websites\sc\index.php(120): Kohana_Request->execute()
#7 {main} in D:\Documenten\Websites\sc\application\classes\Controller\Ajax.php:12
2013-03-29 12:40:53 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Ajax::$config ~ APPPATH\classes\Controller\Ajax.php [ 12 ] in D:\Documenten\Websites\sc\application\classes\Controller\Ajax.php:12
2013-03-29 12:40:53 --- DEBUG: #0 D:\Documenten\Websites\sc\application\classes\Controller\Ajax.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\Documenten\W...', 12, Array)
#1 D:\Documenten\Websites\sc\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_send_agenda_mail()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\Documenten\Websites\sc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 D:\Documenten\Websites\sc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\Documenten\Websites\sc\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\Documenten\Websites\sc\index.php(120): Kohana_Request->execute()
#7 {main} in D:\Documenten\Websites\sc\application\classes\Controller\Ajax.php:12
2013-03-29 12:40:53 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Ajax::$config ~ APPPATH\classes\Controller\Ajax.php [ 12 ] in D:\Documenten\Websites\sc\application\classes\Controller\Ajax.php:12
2013-03-29 12:40:53 --- DEBUG: #0 D:\Documenten\Websites\sc\application\classes\Controller\Ajax.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\Documenten\W...', 12, Array)
#1 D:\Documenten\Websites\sc\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_send_agenda_mail()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\Documenten\Websites\sc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 D:\Documenten\Websites\sc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\Documenten\Websites\sc\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\Documenten\Websites\sc\index.php(120): Kohana_Request->execute()
#7 {main} in D:\Documenten\Websites\sc\application\classes\Controller\Ajax.php:12
2013-03-29 12:40:54 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Ajax::$config ~ APPPATH\classes\Controller\Ajax.php [ 12 ] in D:\Documenten\Websites\sc\application\classes\Controller\Ajax.php:12
2013-03-29 12:40:54 --- DEBUG: #0 D:\Documenten\Websites\sc\application\classes\Controller\Ajax.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\Documenten\W...', 12, Array)
#1 D:\Documenten\Websites\sc\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_send_agenda_mail()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\Documenten\Websites\sc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 D:\Documenten\Websites\sc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\Documenten\Websites\sc\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\Documenten\Websites\sc\index.php(120): Kohana_Request->execute()
#7 {main} in D:\Documenten\Websites\sc\application\classes\Controller\Ajax.php:12
2013-03-29 12:41:26 --- CRITICAL: Swift_TransportException [ 0 ]: Connection could not be established with host smtp.gmail.com [Unable to find the socket transport "ssl" - did you forget to enable it when you configured PHP? #1] ~ MODPATH\email\vendor\swiftmailer\lib\classes\Swift\Transport\StreamBuffer.php [ 259 ] in D:\Documenten\Websites\sc\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\StreamBuffer.php:64
2013-03-29 12:41:26 --- DEBUG: #0 D:\Documenten\Websites\sc\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\StreamBuffer.php(64): Swift_Transport_StreamBuffer->_establishSocketConnection()
#1 D:\Documenten\Websites\sc\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\AbstractSmtpTransport.php(115): Swift_Transport_StreamBuffer->initialize(Array)
#2 D:\Documenten\Websites\sc\modules\email\vendor\swiftmailer\lib\classes\Swift\Mailer.php(80): Swift_Transport_AbstractSmtpTransport->start()
#3 D:\Documenten\Websites\sc\modules\email\classes\Email.php(99): Swift_Mailer->send(Object(Swift_Message))
#4 D:\Documenten\Websites\sc\application\classes\Controller\Ajax.php(31): Email->send()
#5 D:\Documenten\Websites\sc\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_send_agenda_mail()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\Documenten\Websites\sc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#8 D:\Documenten\Websites\sc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\Documenten\Websites\sc\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 D:\Documenten\Websites\sc\index.php(120): Kohana_Request->execute()
#11 {main} in D:\Documenten\Websites\sc\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\StreamBuffer.php:64
2013-03-29 12:41:54 --- CRITICAL: Swift_TransportException [ 0 ]: Connection could not be established with host smtp.gmail.com [Unable to find the socket transport "ssl" - did you forget to enable it when you configured PHP? #1] ~ MODPATH\email\vendor\swiftmailer\lib\classes\Swift\Transport\StreamBuffer.php [ 259 ] in D:\Documenten\Websites\sc\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\StreamBuffer.php:64
2013-03-29 12:41:54 --- DEBUG: #0 D:\Documenten\Websites\sc\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\StreamBuffer.php(64): Swift_Transport_StreamBuffer->_establishSocketConnection()
#1 D:\Documenten\Websites\sc\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\AbstractSmtpTransport.php(115): Swift_Transport_StreamBuffer->initialize(Array)
#2 D:\Documenten\Websites\sc\modules\email\vendor\swiftmailer\lib\classes\Swift\Mailer.php(80): Swift_Transport_AbstractSmtpTransport->start()
#3 D:\Documenten\Websites\sc\modules\email\classes\Email.php(99): Swift_Mailer->send(Object(Swift_Message))
#4 D:\Documenten\Websites\sc\application\classes\Controller\Ajax.php(31): Email->send()
#5 D:\Documenten\Websites\sc\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_send_agenda_mail()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\Documenten\Websites\sc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#8 D:\Documenten\Websites\sc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\Documenten\Websites\sc\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 D:\Documenten\Websites\sc\index.php(120): Kohana_Request->execute()
#11 {main} in D:\Documenten\Websites\sc\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\StreamBuffer.php:64
2013-03-29 12:42:29 --- CRITICAL: Swift_TransportException [ 0 ]: Connection could not be established with host smtp.gmail.com [An attempt was made to access a socket in a way forbidden by its access permissions.
 #10013] ~ MODPATH\email\vendor\swiftmailer\lib\classes\Swift\Transport\StreamBuffer.php [ 259 ] in D:\Documenten\Websites\sc\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\StreamBuffer.php:64
2013-03-29 12:42:29 --- DEBUG: #0 D:\Documenten\Websites\sc\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\StreamBuffer.php(64): Swift_Transport_StreamBuffer->_establishSocketConnection()
#1 D:\Documenten\Websites\sc\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\AbstractSmtpTransport.php(115): Swift_Transport_StreamBuffer->initialize(Array)
#2 D:\Documenten\Websites\sc\modules\email\vendor\swiftmailer\lib\classes\Swift\Mailer.php(80): Swift_Transport_AbstractSmtpTransport->start()
#3 D:\Documenten\Websites\sc\modules\email\classes\Email.php(99): Swift_Mailer->send(Object(Swift_Message))
#4 D:\Documenten\Websites\sc\application\classes\Controller\Ajax.php(31): Email->send()
#5 D:\Documenten\Websites\sc\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_send_agenda_mail()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\Documenten\Websites\sc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#8 D:\Documenten\Websites\sc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\Documenten\Websites\sc\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 D:\Documenten\Websites\sc\index.php(120): Kohana_Request->execute()
#11 {main} in D:\Documenten\Websites\sc\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\StreamBuffer.php:64
2013-03-29 13:26:57 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\Controller\Ajax.php [ 23 ] in D:\Documenten\Websites\sc\application\classes\Controller\Ajax.php:23
2013-03-29 13:26:57 --- DEBUG: #0 D:\Documenten\Websites\sc\application\classes\Controller\Ajax.php(23): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Documenten\W...', 23, Array)
#1 D:\Documenten\Websites\sc\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_send_agenda_mail()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\Documenten\Websites\sc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 D:\Documenten\Websites\sc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\Documenten\Websites\sc\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\Documenten\Websites\sc\index.php(120): Kohana_Request->execute()
#7 {main} in D:\Documenten\Websites\sc\application\classes\Controller\Ajax.php:23
2013-03-29 13:27:33 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\Controller\Ajax.php [ 23 ] in D:\Documenten\Websites\sc\application\classes\Controller\Ajax.php:23
2013-03-29 13:27:33 --- DEBUG: #0 D:\Documenten\Websites\sc\application\classes\Controller\Ajax.php(23): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Documenten\W...', 23, Array)
#1 D:\Documenten\Websites\sc\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_send_agenda_mail()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\Documenten\Websites\sc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 D:\Documenten\Websites\sc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\Documenten\Websites\sc\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\Documenten\Websites\sc\index.php(120): Kohana_Request->execute()
#7 {main} in D:\Documenten\Websites\sc\application\classes\Controller\Ajax.php:23