<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$active_group = 'default';
$query_builder = TRUE;

// Usar variables de entorno si están disponibles (Docker), sino usar valores por defecto
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => getenv('DB_HOST') ?: '31.97.130.20',
	'username' => getenv('DB_USER') ?: 'mariadb',
	'password' => getenv('DB_PASSWORD') ?: '9204a8246f7ed4fe49e6',
	'database' => getenv('DB_NAME') ?: 'electo',
	'dbdriver' => 'mysqli',
	'port'     => getenv('DB_PORT') ?: 4646,
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
