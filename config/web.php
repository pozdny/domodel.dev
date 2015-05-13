<?php
use yii\helpers\ArrayHelper;
$params = ArrayHelper::merge(
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

$config = [
    'id' => 'app',
    'defaultRoute' => 'main/default/index',
    'layout' => 'main',
    'components' => [
        'user' => [
            'identityClass' => 'app\modules\user\models\User',
            'enableAutoLogin' => true,
            'loginUrl' => ['user/default/login'],
        ],
        'errorHandler' => [
            'errorAction' => 'main/default/error',
        ],
        'request' => [
            'cookieValidationKey' => '',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
        ],
        'assetManager' => [
            'class' => 'yii\web\AssetManager',
            'appendTimestamp' => true,
            'bundles' => [
                'yii\web\JqueryAsset' => [
                    'js' => [
                        YII_ENV_DEV ? 'jquery.js' : 'jquery.min.js'
                    ]
                ],
            ],
        ],
        'view' => [
            'class' => 'yii\web\View',
            'renderers' => [
                'twig' => [
                    'class' => 'yii\twig\ViewRenderer',
                    'cachePath' => '@runtime/Twig/cache',
                    // Array of twig options:
                    'options' => [
                        'auto_reload' => true,
                        'debug' => true,
                        'autoescape' => true,
                    ],
                    'extensions' => [
                        'Twig_Extension_Debug',
                        'Twig_Extension_Escaper',
                    ],
                    'globals' => [
                        'Html' => '\yii\helpers\Html',
                        'Nav' => 'yii\bootstrap\Nav',
                        'NavBar' => 'yii\bootstrap\NavBar',
                        'Breadcrumbs' => 'yii\widgets\Breadcrumbs',
                        'Alert' => 'app\components\widgets\Alert',
                        'MyFunc' => 'app\components\MyFunc',
                    ],
                    'uses' => ['yii\bootstrap'],
                ],
                // ...
            ],
        ],

    ],
];

//echo '<pre>';print_r($config); echo '</pre>';
if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'allowedIPs' => ['127.0.0.1', '::1', '192.168.*'] // регулируйте в соответствии со своими нуждами
    ];
}

return $config;
