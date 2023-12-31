<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'LWpFLq7dU3TzLjfqo2elCsthI8YGkv77',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => \yii\symfonymailer\Mailer::class,
            'viewPath' => '@app/mail',
            // send all mails to a file by default.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '' => 'site2/index',
                '<slug>' => 'site2/vat-lieu-chi-tiet',
                'du-an' => 'site2/du-an',
                'xem-du-an/<slug>' => 'site2/du-an-chi-tiet',
                'san-pham/<type>' => 'site2/san-pham',
                'xem-san-pham/<slug>' => 'site2/san-pham-chi-tiet',
            ],
        ],
        
        /* 'view' => [
            'theme' => [
                'pathMap' => ['@app/views' => '@app/themes/main'],
                'baseUrl' => '@web/../themes/main',
            ],
        ], */
        
        'view' => [
             'theme' => [
                 'pathMap' => ['@app/views' => '@app/themes/anhduong2'],
                 'baseUrl' => '@web/../themes/anhduong2',
             ],
         ],
        
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
       //'allowedIPs' => ['127.0.0.1', '::1'],
        'allowedIPs' => ['127.8.8.8'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
