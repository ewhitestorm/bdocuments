<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'language' => 'ru-RU',
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log', 'gii'],
    'modules' => [
        'gii' => [
            'class' => 'yii\gii\Module'
        ],
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '[rsljTTKnDoyitYmEOrbS]',
            'csrfParam' => '_backendCSRF',
//            'csrfParam' => '_backendCSRF',
//            'csrfCookie' => [
//                'httpOnly' => true,
//                'path' => '/admin',
//            ],
        ],
        'user' => [
            'identityClass' => 'common\models\Admin',
            'enableAutoLogin' => true,
            'identityCookie' => [
                'name' => '_backendUser', // unique for backend
//            'identityClass' => [
//                'name' => '_backendIdentity',
//                'path' => '/admin',
//                'httpOnly' => true,
            ],
        ],
        'session' => [
            'name' => 'PHPBACKSESSID',
            'savePath' => sys_get_temp_dir(),
            // this is the name of the session cookie used for login on the backend
//            'name' => 'BACKENDSESSID',
//            'cookieParams' => [
//                'path' => '/admin',
//            ],
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,
            'rules' => [
            ],
        ],
    ],
    'params' => $params,
];
