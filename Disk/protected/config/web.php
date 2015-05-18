<?php

$params = require(__DIR__ . '/params.php');


$config = [
     'id' => 'basic',
    'homeUrl' => '/site/',
    'basePath' => dirname(__DIR__),
    'layout' => 'main',
    'bootstrap' => ['log'],
   // 'application' => dirname(__DIR__),
    'components' => [
        'urlManager' => [
        'enablePrettyUrl' => true,
        'showScriptName' => false,
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '____Sham____',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
//        'errorHandler' => [
//            'errorAction' => 'site/error',
//        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
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
        'assetManager' => [
            'assetMap' => [
               // 'jquery.js' => '//ajax.useso.com/ajax/libs/jquery/2.1.1/jquery.min.js',
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
    ],
    'modules' => [
        'gii' => [
            'class' => 'yii\gii\Module',
            'allowedIPs' => ['127.0.0.1', '::1', '192.168.1.200', '192.168.178.20'] // 按需调整这里
        ],
        'v1' => [
            'class' => 'app\modules\v1\Module',
        ],
        //超级用户权限
        'manage' => [
            'class' => 'app\modules\manage\Module',
        ],
        //对所有用户都有效的sysmanage - 用户区分 example ： 修改密码
        'smanage' => [
            'class' => 'app\modules\smanage\Module',
        ],

//        'welcome' => [
//            'class' => 'app\modules\welcome\Module',
//        ],
    ],

    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;
