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
		'albertine' => '0a7b98360c3d631201c0abc5203b8255b7b14988772cff0a00026152be3024da',
	),

);
