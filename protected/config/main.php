<?php

return array(
    'basePath'       => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name'           => 'Вернуться на сайт',

    'preload'        => array(
        'log',
        'bootstrap',
		'languages',
    ),
    'sourceLanguage' => 'ru',
    'language'       => 'ru',
    //bootstrap

    'import'         => array(
        'application.models.*',
        'application.widgets.*',
        'application.components.*',
        'application.modules.timesafe.components.*',
        'ext.bootstrap.widgets.*',
        'ext.yiiext.components.shoppingCart.*'

    ),

    'modules'        => array(
        'timesafe',
        'vii' => array(
            'generatorPaths' => array(
                'application.gii',
            ),
            'class'          => 'application.vii.ViiModule',
            'password'       => '123',
            'ipFilters'      => array('127.0.0.1', '192.168.254.23', '192.168.254.50', '192.168.254.40'),
        ),
    ),

    'components'     => array(

        'shoppingCart' =>
        array(
            'class' => 'ext.yiiext.components.shoppingCart.EShoppingCart',
        ),

        'user'        => array(
            'class'          => 'RWebUser',
            'allowAutoLogin' => true,
        ),

        'authManager' => array(
            'class' => 'RDbAuthManager',
        ),
        // 'cache' => array(
        //     'class' => 'CDbCache',
        // ),
        'urlManager'  => array(
            'showScriptName' => false,
            'urlFormat'      => 'path',
            'urlSuffix'      => '.html',
            'rules'          => array(
                'p/<id:\w+>'          => 'article/show',
                'upload/<path:[\/.\-_\w]+>'=> 'upload/render',
				'map'=>'site/map',

				'page/<name:[\w_-]+>'=>'page/show',

				'stati/<url:[\w_-]+>'=>'stati/show',


				'contacti'=>'site/contacti',
				'zapis'=>'site/zapis',
				'pz'=>'site/pz',
				
				'promo1'=>'site/index',
				'promo2'=>'site/index',
				
                'news/<url:[\w_-]+>'=>'news/category',
                'news/<category:[\w_-]+>/<url:[\w_-]+>'=>'news/show',
                'club/<url:[\w_-]+>'=>'club/page',
                'academy/<url:[\w_-]+>'=>'academy/page',
                'fans/<url:[\w_-]+>'=>'fans/page',
                
                'recipe/<url:[\w_-]+>'=>'recipe/category',
                'recipe/<category:[\w_-]+>/<url:[\w_-]+>'=>'recipe/show',
                'health/<url:[\w_-]+>'=>'health/category',
                'health/<category:[\w_-]+>/<url:[\w_-]+>'=>'health/show',
                'diet/<url:[\w_-]+>'=>'diet/category',
                'diet/<category:[\w_-]+>/<url:[\w_-]+>'=>'diet/show',
            ),
            ),
     
        'cache'=>array(
            'class'=>'CDbCache',
            'connectionID'=>'db'
        ),

		'db'          => array(
          'connectionString' => 'mysql:host=localhost;dbname=cvl_db',
			'emulatePrepare' => true,
			'username' => 'cvl_us',
			'password' => 'Maint112233',
			
            'charset'            => 'utf8',
            'enableProfiling'    => true,
            'enableParamLogging' => true
        ),

        'log'         => array(
            'class'  => 'CLogRouter',
            'routes' => array(
                array(
                    'class'     => 'ext.yii-debug-toolbar.YiiDebugToolbarRoute',
                    'ipFilters' => array('127.0.0.1', '192.168.254.23', '192.168.254.50', '192.168.254.40'),
                ),
//                array(
//                    'class' => 'CFileLogRoute',
//                    'levels' => 'error, warning',
//                ),
                // uncomment the following to show log messages on web pages

//                    array(
//                        'class'=>'CWebLogRoute',
//                    ),

            ),
        ),
        'clientScript'=>array(
            'scriptMap'=>array(
               // 'jquery.min.js'=>false,
            ),
           // 'enableJavaScript'=>false,    // Эта опция отключает любую генерацию javascript'а фреймворком
        ),
        'messages'=>array(
            'class'=>'CDbMessageSource',
            'sourceMessageTable'=>'sys_SourceMessage',
            'translatedMessageTable'=>'sys_Message',
            'onMissingTranslation'=>array('MissingMessages', 'load'),
        ),
    ),
    'params'         => array(
        'adminEmail'   => 'support@alinex.kz',
        'noreplyEmail' => 'support@alinex.kz',
    ),
);
