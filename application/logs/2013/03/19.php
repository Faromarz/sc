<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-19 10:48:38 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: php_network_getaddresses: getaddrinfo failed: No such host is known.  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\Documenten\Websites\sc\modules\database\classes\Kohana\Database\MySQL.php:430
2013-03-19 10:48:38 --- DEBUG: #0 D:\Documenten\Websites\sc\modules\database\classes\Kohana\Database\MySQL.php(430): Kohana_Database_MySQL->connect()
#1 D:\Documenten\Websites\sc\modules\database\classes\Kohana\Database.php(478): Kohana_Database_MySQL->escape('frontpage')
#2 D:\Documenten\Websites\sc\modules\database\classes\Kohana\Database\Query\Builder.php(116): Kohana_Database->quote('frontpage')
#3 D:\Documenten\Websites\sc\modules\database\classes\Kohana\Database\Query\Builder\Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQL), Array)
#4 D:\Documenten\Websites\sc\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#5 D:\Documenten\Websites\sc\application\classes\App.php(15): Kohana_Database_Query->execute()
#6 D:\Documenten\Websites\sc\application\views\site\index.php(1): App::get_content('frontpage')
#7 D:\Documenten\Websites\sc\system\classes\Kohana\View.php(61): include('D:\Documenten\W...')
#8 D:\Documenten\Websites\sc\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\Documenten\W...', Array)
#9 D:\Documenten\Websites\sc\system\classes\Kohana\View.php(228): Kohana_View->render()
#10 D:\Documenten\Websites\sc\application\views\template.php(36): Kohana_View->__toString()
#11 D:\Documenten\Websites\sc\system\classes\Kohana\View.php(61): include('D:\Documenten\W...')
#12 D:\Documenten\Websites\sc\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\Documenten\W...', Array)
#13 D:\Documenten\Websites\sc\application\classes\Controller\Main.php(57): Kohana_View->render()
#14 D:\Documenten\Websites\sc\system\classes\Kohana\Controller.php(87): Controller_Main->after()
#15 [internal function]: Kohana_Controller->execute()
#16 D:\Documenten\Websites\sc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#17 D:\Documenten\Websites\sc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 D:\Documenten\Websites\sc\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#19 D:\Documenten\Websites\sc\index.php(120): Kohana_Request->execute()
#20 {main} in D:\Documenten\Websites\sc\modules\database\classes\Kohana\Database\MySQL.php:430
2013-03-19 11:17:58 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ UPDATE `` SET `content` = 'Welkom\n' WHERE `id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\Documenten\Websites\sc\modules\database\classes\Kohana\Database\Query.php:251
2013-03-19 11:17:58 --- DEBUG: #0 D:\Documenten\Websites\sc\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `` SET `...', false, Array)
#1 D:\Documenten\Websites\sc\application\classes\Controller\Admin.php(30): Kohana_Database_Query->execute()
#2 D:\Documenten\Websites\sc\system\classes\Kohana\Controller.php(84): Controller_Admin->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\Documenten\Websites\sc\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\Documenten\Websites\sc\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\Documenten\Websites\sc\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\Documenten\Websites\sc\index.php(120): Kohana_Request->execute()
#8 {main} in D:\Documenten\Websites\sc\modules\database\classes\Kohana\Database\Query.php:251