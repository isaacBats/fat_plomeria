<?php 
	// // TRACER
	$whoops = new \Whoops\Run;
	$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
	$whoops->register();

	//  ROOT DIRECTORY
	define('__OLIVE__',  __DIR__."/.." );
	define('__ASSETS__',  __DIR__."/../assets/" );

	$cfg = new \Spot\Config();
	
	// Conection SQLite
	// $cfg->addConnection('sqlite', 'sqlite://../database_plumbing/plumbing.db');
	$cfg->addConnection('sqlite', 'sqlite://'.__OLIVE__.'/database_plumbing/plumbing.db');

	// Connection Mysql Data Base
	// $cfg->addConnection('mysql', [
	//     'dbname' => 'luna',
	//     'user' => 'luna',
	//     'password' => 'luna',
	//     'host' => 'localhost',
	//     'driver' => 'pdo_mysql',
	// ]);

	global $spot;
	$spot = new \Spot\Locator($cfg);

	if( !isset($_SESSION)){session_start();}
	$aura_session = new \Aura\Session\SessionFactory;
	global $session_handle;
    $session_handle = $aura_session->newInstance($_SESSION);

	// LANG  MANNAGER
	// TODO: Pass to middleware
	$lang = isset($_GET["lang"])?$_GET["lang"]:"es";
	if( str_replace( "/".$lang ,"",$_SERVER["REQUEST_URI"] ) != $_SERVER["REQUEST_URI"] ){
		$_SERVER["REQUEST_URI"] = substr( $_SERVER["REQUEST_URI"], 3 );	
	}