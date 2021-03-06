<?php defined('SYSPATH') or die('No direct script access.');

// -- Environment setup --------------------------------------------------------

// Load the core Kohana class
require SYSPATH.'classes/Kohana/Core'.EXT;

if (is_file(APPPATH.'classes/Kohana'.EXT))
{
	// Application extends the core
	require APPPATH.'classes/Kohana'.EXT;
}
else
{
	// Load empty core extension
	require SYSPATH.'classes/Kohana'.EXT;
}

/**
 * Set the default time zone.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/timezones
 */
date_default_timezone_set('Europe/Amsterdam');

/**
 * Set the default locale.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/function.setlocale
 */
setlocale(LC_ALL, 'nl_NL.utf-8');

/**
 * Enable the Kohana auto-loader.
 *
 * @link http://kohanaframework.org/guide/using.autoloading
 * @link http://www.php.net/manual/function.spl-autoload-register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Optionally, you can enable a compatibility auto-loader for use with
 * older modules that have not been updated for PSR-0.
 *
 * It is recommended to not enable this unless absolutely necessary.
 */
//spl_autoload_register(array('Kohana', 'auto_load_lowercase'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @link http://www.php.net/manual/function.spl-autoload-call
 * @link http://www.php.net/manual/var.configuration#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

// -- Configuration and initialization -----------------------------------------

/**
 * Set the default language
 */
I18n::lang('nl-nl');

/**
 * Set Kohana::$environment if a 'KOHANA_ENV' environment variable has been supplied.
 *
 * Note: If you supply an invalid environment name, a PHP warning will be thrown
 * saying "Couldn't find constant Kohana::<INVALID_ENV_NAME>"
 */

$development_addr = array(
    '::1',
    '127.0.0.1',
    '82.75.66.170'
);

Kohana::$environment = in_array($_SERVER['REMOTE_ADDR'], $development_addr) ? Kohana::DEVELOPMENT : Kohana::PRODUCTION;

if (isset($_SERVER['KOHANA_ENV']))
{
	Kohana::$environment = constant('Kohana::'.strtoupper($_SERVER['KOHANA_ENV']));
}

/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - integer  cache_life  lifetime, in seconds, of items cached              60
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 * - boolean  expose      set the X-Powered-By header                        FALSE
 */
Kohana::init(array(
	'base_url'   => NULL,
        'index_file' => '',
        'caching'    => Kohana::$environment == Kohana::PRODUCTION,
        'profile'    => Kohana::$environment == Kohana::DEVELOPMENT
));

/**
 * Cookie Salt
 */
Cookie::$salt = 'Ei957j255BNxQ5DzhciY9t1rO1t8Wwg4';

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Log_File(APPPATH.'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Config_File);

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array(
	'auth'       => MODPATH.'auth',       // Basic authentication
	// 'cache'      => MODPATH.'cache',      // Caching with multiple backends
	// 'codebench'  => MODPATH.'codebench',  // Benchmarking tool
	'database'   => MODPATH.'database',   // Database access
        'email'      => MODPATH.'email',
        'captcha'    => MODPATH.'captcha',
	// 'image'      => MODPATH.'image',      // Image manipulation
	// 'minion'     => MODPATH.'minion',     // CLI Tasks
	'orm'        => MODPATH.'orm',        // Object Relationship Mapping
	// 'unittest'   => MODPATH.'unittest',   // Unit testing
	// 'userguide'  => MODPATH.'userguide',  // User guide and API documentation
	));

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */

// Catch-all route for Captcha classes to run
Route::set('captcha', 'captcha(/<group>)')
	->defaults(array(
            'controller' => 'Captcha',
            'action' => 'index',
            'group' => NULL
        ));


Route::set('agenda', 'agenda(/<action>)')
        ->defaults(array(
            'controller'    => 'Agenda',
            'action'        => 'index'
        ));

Route::set('licht-en-informatie', 'licht-en-informatie')
        ->defaults(array(
            'controller'    => 'Informatie',
            'action'        => 'lichteninformatie'
        ));

Route::set('de-essentie', 'de-essentie')
        ->defaults(array(
            'controller'    => 'Informatie',
            'action'        => 'essentie'
        ));

Route::set('tarieven', 'tarieven')
        ->defaults(array(
            'controller'    => 'Contact',
            'action'        => 'tarieven'
        ));

Route::set('coaching', 'coaching')
        ->defaults(array(
            'controller'    => 'Consulten',
            'action'        => 'coaching'
        ));

Route::set('reconnective-healing', 'reconnective-healing')
        ->defaults(array(
            'controller'    => 'Consulten',
            'action'        => 'reconnectivehealing'
        ));

Route::set('kosmische-intelligentie', 'kosmische-intelligentie')
        ->defaults(array(
            'controller'    => 'Consulten',
            'action'        => 'kosmischeintelligentie'
        ));

Route::set('pad-van-zelfontwikkeling', 'pad-van-zelfontwikkeling')
        ->defaults(array(
            'controller'    => 'Informatie',
            'action'        => 'padvanzelfontwikkeling'
        ));

Route::set('contact', 'contact(/<action>)')
        ->defaults(array(
            'controller'    => 'Contact',
            'action'        => 'index'
        ));

Route::set('admin', 'admin(/<action>(/<id>(/<id2>)))')
        ->defaults(array(
            'controller'    => 'Admin',
            'action'        => 'index',
            'id'            => NULL,
            'id2'           => NULL
        ));

Route::set('ajax', 'ajax(/<action>)')
        ->defaults(array(
            'controller'    => 'Ajax',
            'action'    => 'index'
        ));

Route::set('dev', 'dev(/<action>)')
        ->defaults(array(
            'controller'    => 'Dev', 
            'action'        => 'index'
        ));

Route::set('default', '(<action>(/<id>))')
        ->defaults(array(
            'controller'    => 'Informatie',
            'action'        => 'home'
        ));