<?php
namespace app;

/**
 * Class Application
 * @package app
 *
 * @property $test
 * @property $test2
 */
class Application extends \PhpDevil\web\Application
{
    public static function getConfigSource()
    {
        return __DIR__ . '/config/application.php';
    }
}