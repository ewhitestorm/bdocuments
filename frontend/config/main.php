<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'language' => 'ru-RU',
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            //'csrfParam' => '_csrf-frontend',
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '[RTggYmxtSkCvSzrgJQcd]',
            'csrfParam' => '_frontendCSRF',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            //'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
            'identityCookie' => ['name' => '_frontendUser',],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            //'name' => 'advanced-frontend',
            'name' => 'PHPFRONTSESSID',
            'savePath' => sys_get_temp_dir(),
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
                '<action>' => 'site/<action>'
            ],
        ],
    ],
    'params' => $params,
];
