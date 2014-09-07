<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'آغاز کار با تومیتو کارت پارسی',
	'id' => 'tomato-blog',
	'language'=>'fa_ir',
	'theme'=>'classic',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(

		'application.modules.admin.components.*',
		'application.modules.admin.models.*',
		'application.models.*',
		'application.components.*',
	),
	

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>false,
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),'admin'
		
	),

	// application components
	'components'=>array(
		'jdate' => array(
			'class' => 'ext.jdate.JDateTime',
			'convert' => true,
			'jalali' => true,
			'timezone' => 'Asia/Tehran',
		),
		'session' => array (
			'class' => 'system.web.CDbHttpSession',
			'sessionName' => 'SSession',
			'cookieMode' => 'only',
			'connectionID' => 'db',
			'sessionTableName' => '{{session}}',
			'timeout' => 1200,

		),
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
			'loginUrl'=>array('login'),
		),
		// uncomment the following to enable URLs in path-format
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName' => false,
			'caseSensitive'=>false, 
			'rules'=>array(
				'Logout' => array('admin/Default/Logout','urlSuffix'=>'.html'),
				'index' => array('/site/index','urlSuffix'=>'.html'),
				'admlogin' => array('admin/Default','urlSuffix'=>'.html'),
				'user' => array('admin/user/index','urlSuffix'=>'.html'),
				'admin' => array('admin/admin','urlSuffix'=>'.html'),
				'article' => array('admin/article','urlSuffix'=>'.html'),
				'section' => array('admin/section','urlSuffix'=>'.html'),
				'imageUpload' => array('admin/article/upload','urlSuffix'=>'.html'),
				
				
				'ls/<id:.*?>' => array('/site/section','urlSuffix'=>'.html'),
				'post/<id:.*?>' => array('/site/article','urlSuffix'=>'.html'),

				
			),
		),
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=tom',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '123456',
			'charset' => 'utf8',
			'tablePrefix' => 'tblog_',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);
