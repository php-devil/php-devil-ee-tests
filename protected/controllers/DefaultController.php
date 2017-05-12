<?php
namespace app\controllers;
use PhpDevil\web\Controller;

class DefaultController extends Controller
{
    /**
     * Метод задействован в тестировании прямого запроса в WebRouter
     * @return string
     */
    public function actionTest()
    {
        return 'actionTest of app DefaultController';
    }
}