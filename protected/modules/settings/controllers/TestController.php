<?php
namespace app\modules\settings\controllers;
use PhpDevil\web\Controller;

class TestController extends Controller
{
    public function actionTest()
    {
        return 'actionTest of TestController of SettingsModule';
    }
}