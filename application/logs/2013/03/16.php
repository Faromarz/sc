<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-16 10:56:06 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Contact.php [ 22 ] in C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\application\classes\Controller\Contact.php:22
2013-03-16 10:56:06 --- DEBUG: #0 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\application\classes\Controller\Contact.php(22): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\Users\Tom La...', 22, Array)
#1 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Controller.php(84): Controller_Contact->action_gastenboek()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contact))
#4 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\index.php(120): Kohana_Request->execute()
#7 {main} in C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\application\classes\Controller\Contact.php:22
2013-03-16 11:13:20 --- CRITICAL: Kohana_Exception [ 0 ]: The id_ property does not exist in the Model_Guestbookitem class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\orm\classes\Kohana\ORM.php:600
2013-03-16 11:13:20 --- DEBUG: #0 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('id_')
#1 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\application\classes\Controller\Contact.php(26): Kohana_ORM->__get('id_')
#2 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Controller.php(84): Controller_Contact->action_gastenboek()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contact))
#5 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\index.php(120): Kohana_Request->execute()
#8 {main} in C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\orm\classes\Kohana\ORM.php:600
2013-03-16 11:18:36 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\Main.php [ 31 ] in C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\application\classes\Controller\Main.php:31
2013-03-16 11:18:36 --- DEBUG: #0 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\application\classes\Controller\Main.php(31): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Tom La...', 31, Array)
#1 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Controller.php(84): Controller_Main->action_acceptguestbookitem()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\index.php(120): Kohana_Request->execute()
#7 {main} in C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\application\classes\Controller\Main.php:31
2013-03-16 11:39:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: url ~ APPPATH\classes\Controller\Contact.php [ 27 ] in C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\application\classes\Controller\Contact.php:27
2013-03-16 11:39:21 --- DEBUG: #0 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\application\classes\Controller\Contact.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Tom La...', 27, Array)
#1 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Controller.php(84): Controller_Contact->action_gastenboek()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contact))
#4 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\index.php(120): Kohana_Request->execute()
#7 {main} in C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\application\classes\Controller\Contact.php:27
2013-03-16 11:39:32 --- CRITICAL: Kohana_Exception [ 0 ]: The id_ property does not exist in the Model_Guestbookitem class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\orm\classes\Kohana\ORM.php:600
2013-03-16 11:39:32 --- DEBUG: #0 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('id_')
#1 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\application\views\mail\acceptguestbookitem.php(7): Kohana_ORM->__get('id_')
#2 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\View.php(61): include('C:\Users\Tom La...')
#3 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\Users\Tom La...', Array)
#4 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\application\classes\Controller\Contact.php(28): Kohana_View->render()
#5 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Controller.php(84): Controller_Contact->action_gastenboek()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contact))
#8 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\index.php(120): Kohana_Request->execute()
#11 {main} in C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\orm\classes\Kohana\ORM.php:600
2013-03-16 11:40:10 --- CRITICAL: Swift_TransportException [ 0 ]: Connection could not be established with host localhost [Unable to find the socket transport "ssl" - did you forget to enable it when you configured PHP? #1] ~ MODPATH\email\vendor\swiftmailer\lib\classes\Swift\Transport\StreamBuffer.php [ 259 ] in C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\StreamBuffer.php:64
2013-03-16 11:40:10 --- DEBUG: #0 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\StreamBuffer.php(64): Swift_Transport_StreamBuffer->_establishSocketConnection()
#1 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\AbstractSmtpTransport.php(115): Swift_Transport_StreamBuffer->initialize(Array)
#2 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\email\vendor\swiftmailer\lib\classes\Swift\Mailer.php(80): Swift_Transport_AbstractSmtpTransport->start()
#3 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\email\classes\Email.php(99): Swift_Mailer->send(Object(Swift_Message))
#4 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\application\classes\Controller\Contact.php(38): Email->send()
#5 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Controller.php(84): Controller_Contact->action_gastenboek()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contact))
#8 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\index.php(120): Kohana_Request->execute()
#11 {main} in C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\StreamBuffer.php:64
2013-03-16 11:40:25 --- CRITICAL: Swift_TransportException [ 0 ]: Connection could not be established with host localhost [Unable to find the socket transport "ssl" - did you forget to enable it when you configured PHP? #1] ~ MODPATH\email\vendor\swiftmailer\lib\classes\Swift\Transport\StreamBuffer.php [ 259 ] in C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\StreamBuffer.php:64
2013-03-16 11:40:25 --- DEBUG: #0 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\StreamBuffer.php(64): Swift_Transport_StreamBuffer->_establishSocketConnection()
#1 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\AbstractSmtpTransport.php(115): Swift_Transport_StreamBuffer->initialize(Array)
#2 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\email\vendor\swiftmailer\lib\classes\Swift\Mailer.php(80): Swift_Transport_AbstractSmtpTransport->start()
#3 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\email\classes\Email.php(99): Swift_Mailer->send(Object(Swift_Message))
#4 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\application\classes\Controller\Contact.php(38): Email->send()
#5 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Controller.php(84): Controller_Contact->action_gastenboek()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contact))
#8 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\index.php(120): Kohana_Request->execute()
#11 {main} in C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\StreamBuffer.php:64
2013-03-16 11:45:39 --- CRITICAL: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [Soul-Coaching mail] does not comply with RFC 2822, 3.6.2. ~ MODPATH\email\vendor\swiftmailer\lib\classes\Swift\Mime\Headers\MailboxHeader.php [ 352 ] in C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\email\vendor\swiftmailer\lib\classes\Swift\Mime\Headers\MailboxHeader.php:264
2013-03-16 11:45:39 --- DEBUG: #0 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\email\vendor\swiftmailer\lib\classes\Swift\Mime\Headers\MailboxHeader.php(264): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('Soul-Coaching m...')
#1 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\email\vendor\swiftmailer\lib\classes\Swift\Mime\Headers\MailboxHeader.php(108): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\email\vendor\swiftmailer\lib\classes\Swift\Mime\Headers\MailboxHeader.php(65): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\email\vendor\swiftmailer\lib\classes\Swift\Mime\SimpleMimeEntity.php(604): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\email\vendor\swiftmailer\lib\classes\Swift\Mime\SimpleMessage.php(215): Swift_Mime_SimpleMimeEntity->_setHeaderFieldModel('From', Array)
#5 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\email\classes\Email.php(53): Swift_Mime_SimpleMessage->setFrom(Array)
#6 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\application\classes\Controller\Contact.php(35): Email->setFromDefault()
#7 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Controller.php(84): Controller_Contact->action_gastenboek()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contact))
#10 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\index.php(120): Kohana_Request->execute()
#13 {main} in C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\email\vendor\swiftmailer\lib\classes\Swift\Mime\Headers\MailboxHeader.php:264
2013-03-16 11:45:58 --- CRITICAL: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [Soul-Coaching mail] does not comply with RFC 2822, 3.6.2. ~ MODPATH\email\vendor\swiftmailer\lib\classes\Swift\Mime\Headers\MailboxHeader.php [ 352 ] in C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\email\vendor\swiftmailer\lib\classes\Swift\Mime\Headers\MailboxHeader.php:264
2013-03-16 11:45:58 --- DEBUG: #0 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\email\vendor\swiftmailer\lib\classes\Swift\Mime\Headers\MailboxHeader.php(264): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('Soul-Coaching m...')
#1 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\email\vendor\swiftmailer\lib\classes\Swift\Mime\Headers\MailboxHeader.php(108): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\email\vendor\swiftmailer\lib\classes\Swift\Mime\Headers\MailboxHeader.php(65): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\email\vendor\swiftmailer\lib\classes\Swift\Mime\SimpleMimeEntity.php(604): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\email\vendor\swiftmailer\lib\classes\Swift\Mime\SimpleMessage.php(215): Swift_Mime_SimpleMimeEntity->_setHeaderFieldModel('From', Array)
#5 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\email\classes\Email.php(53): Swift_Mime_SimpleMessage->setFrom(Array)
#6 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\application\classes\Controller\Contact.php(35): Email->setFromDefault()
#7 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Controller.php(84): Controller_Contact->action_gastenboek()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contact))
#10 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\index.php(120): Kohana_Request->execute()
#13 {main} in C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\email\vendor\swiftmailer\lib\classes\Swift\Mime\Headers\MailboxHeader.php:264
2013-03-16 11:46:13 --- CRITICAL: Swift_TransportException [ 0 ]: Connection could not be established with host smtp.gmail.com [Unable to find the socket transport "ssl" - did you forget to enable it when you configured PHP? #1] ~ MODPATH\email\vendor\swiftmailer\lib\classes\Swift\Transport\StreamBuffer.php [ 259 ] in C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\StreamBuffer.php:64
2013-03-16 11:46:13 --- DEBUG: #0 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\StreamBuffer.php(64): Swift_Transport_StreamBuffer->_establishSocketConnection()
#1 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\AbstractSmtpTransport.php(115): Swift_Transport_StreamBuffer->initialize(Array)
#2 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\email\vendor\swiftmailer\lib\classes\Swift\Mailer.php(80): Swift_Transport_AbstractSmtpTransport->start()
#3 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\email\classes\Email.php(99): Swift_Mailer->send(Object(Swift_Message))
#4 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\application\classes\Controller\Contact.php(38): Email->send()
#5 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Controller.php(84): Controller_Contact->action_gastenboek()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contact))
#8 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\index.php(120): Kohana_Request->execute()
#11 {main} in C:\Users\Tom Lankhorst\Documents\NetBeansProjects\Soul-Coaching\modules\email\vendor\swiftmailer\lib\classes\Swift\Transport\StreamBuffer.php:64