<?php
return [
    'components' => [
        'page' => \PhpDevil\components\page\PageComponent::class,
        'user' => [
            'idenity' => \app\models\UserIdenity::class,
        ],
    ],

    'controllers' => [
        'default' => \app\controllers\DefaultController::class,
    ],

    'models'  => [
        'idenity' => \app\models\UserIdenity::class,
        'login'   => \app\models\LoginForm::class,
    ],

    'modules' => [
        'back'     => \app\modules\back\BackendModule::class,
    ],
];