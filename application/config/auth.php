<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(

	'driver'       => 'File',
	'hash_method'  => 'sha256',
	'hash_key'     => 'DLKm29dIim2o10294nCq28cn38Dm2d023j',
	'lifetime'     => 1209600,
	'session_type' => Session::$default,
	'session_key'  => 'auth_user',

	// Username/password combinations for the Auth File driver
	'users' => array(
		'albertine' => '65e6248396942522eb03ed254655edb50163ed9900ce93dc3c8786adfe780dbd',
	),

);
