<?php


define('IMAGES_MAX_UPLOAD_SIZE', 10485760); //Seteado en 10Mb 1024^2 *10. Nota, este valor no sobrescribe el valor seteado en el php.ini. 

define('SLIDE_IMAGES_PATH', "upload/images/slides/"); 
define('SLIDE_THUMBS_IMAGES_PATH', "upload/images/slides/thumbs/"); 

$http = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] && !in_array(strtolower($_SERVER['HTTPS']),array('off','no'))) ? 'https' : 'http';
$http.= "://" . $_SERVER['HTTP_HOST'];

define("HTTP_AND_SERVER_CONST", $http);

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Fabogesic',
	'theme'=>'fabogesic',

	'aliases' => array(
        'bootstrap' => 'application.modules.bootstrap',
        'chartjs' => 'application.modules.bootstrap.extensions.yii-chartjs-master',
    ),

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
        'ext.giix-components.*', // giix components
        'bootstrap.*',
        'bootstrap.components.*',
        'bootstrap.models.*',
        'bootstrap.controllers.*',
        'bootstrap.helpers.*',
        'bootstrap.widgets.*',
        'bootstrap.extensions.*',
        'chartjs.*',
        'chartjs.widgets.*',
        'chartjs.components.*',
	),

	'modules'=>array(

		'bootstrap' => array(
            'class' => 'bootstrap.BootStrapModule'
        ),

		// uncomment the following to enable the Gii tool
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'w1r4ll',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1', '::1', '190.221.128.134'),
            'generatorPaths' => array(
                'ext.giix-core', // giix generators
                //'generatorPaths' => array('bootstrap.gii'),
            ),
		),
	),

	// application components
	'components'=>array(
		'coreMessages'=>array(
			'basePath'=>'protected/messages'
		),
		'bsHtml' => array('class' => 'bootstrap.components.BSHtml'),
        'chartjs'=>array('class' => 'chartjs.components.ChartJs'),

        'bootstrap' => array(
            'class' => 'bootstrap.components.BsApi'
        ),
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
        'simpleImage'=>array(
            'class' => 'application.extensions.CSimpleImage',
        ),
		// uncomment the following to enable URLs in path-format
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		/*'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
		// uncomment the following to use a MySQL database
		/*'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=fabogesic',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'root',
		),*/	
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=fabogesic',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'sqlw1r4ll',
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