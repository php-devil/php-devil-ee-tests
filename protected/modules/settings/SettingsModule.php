<?php
namespace app\modules\settings;
use PhpDevil\web\Module;

class SettingsModule extends Module
{
    public static function getConfigSource()
    {
        return __DIR__ . '/config/module.php';
    }
}