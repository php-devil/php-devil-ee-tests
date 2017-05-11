<?php
namespace app;

class Application extends \PhpDevil\web\Application
{
    public static function getConfigSource()
    {
        return __DIR__ . '/config/application.php';
    }
}