<?php
namespace tests\basic;
use app\Application;
use PHPUnit\Framework\TestCase;

class BaseComponentTest extends TestCase
{
    protected $app = null;

    protected function setUp()
    {
        $this->app = new Application();
    }

    protected function tearDown()
    {
        $this->app = null;
    }

    public function testTest()
    {
        //$module = $this->app->loadModule('settings');
        print_r($this->app);
    }
}