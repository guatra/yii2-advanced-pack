<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
    	'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\DbMessageSource',
                    'forceTranslation' => true,
                ],
                
            ],
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        /*
        'session' => [
            'class' => 'yii\web\DbSession',
            // 'db' => 'mydb',  // ID компонента для взаимодействия с БД. По умолчанию 'db'.
            // 'sessionTable' => 'my_session', // название таблицы для хранения данных сессии. По умолчанию 'session'.
        ],
        /* */
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                [
                    'pattern' => '',
                    'route' => 'site/index',
                    'suffix' => ''
                ],
                [
                    'pattern' => '<controller>/<action>',
                    'route' => '<controller>/<action>',
                    'suffix' => '.html'
                ],
                [
                    'pattern' => '<module>/<controller>/<action>/<id:\d+>',
                    'route' => '<module>/<controller>/<action>',
                    'suffix' => ''
                ],
                [
                    'pattern' => '<module>/<controller>/<action>',
                    'route' => '<module>/<controller>/<action>',
                    'suffix' => '.html'
                ],
            ],
        ],
        /* */
    ],
];
