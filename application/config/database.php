<?php defined('SYSPATH') OR die('No direct access allowed.');
return array
(
	'default' => array
	(
		'type'       => 'MySQL',
		'connection' => array(
			'hostname'   => 'localhost',
			'database'   => 'soulcoaching_webhub_nl',
			'username'   => 'dbuser',
			'password'   => '',
			'persistent' => FALSE,
		),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => FALSE,
	)
);

/**
return array
(
	'default' => array
	(
		'type'       => 'MySQL',
		'connection' => array(
			'hostname'   => 'soul-coaching.nl.mysql',
			'database'   => 'soul_coaching_n',
			'username'   => 'soul_coaching_n',
			'password'   => 'Gf8haKik',
			'persistent' => FALSE,
		),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => FALSE,
	)
);
**/