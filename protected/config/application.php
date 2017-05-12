<?php
return [
    'components' => [

        'page' => \PhpDevil\components\page\PageComponent::class,

        'user' => [
            'class'   => \PhpDevil\components\user\UserComponent::class,
            'idenity' => \app\models\UserIdenity::class,
        ],

        // подключение пользовательского компонента
        'test' => [
            'class'  => \app\components\custom\CustomComponent::class,
            // ВАЖНО! значение title компонента test задействовано в unit тестах. НЕ ПЕРЕГРУЖАТЬ!
        ],

        // подключение пользовательского компонента с частичной перегрузкой параметров
        'test2' => [
            'class' => \app\components\custom\CustomComponent::class,
            // ВАЖНО! значение title компонента test2 задействовано в unit тестах
            'title' => 'Override Title',
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