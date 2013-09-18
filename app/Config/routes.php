<?php

	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));

	Router::connect('/dashboard',array('controller'=>'users','action'=>'dashboard'));

	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
	
	Router::mapResources('claims');
	Router::parseExtensions();
