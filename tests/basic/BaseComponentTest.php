<?php
namespace tests\basic;
use PhpDevil\web\Application;
use PHPUnit\Framework\TestCase;

class BaseComponentTest extends TestCase
{
    protected $app = null;

    protected function setUp()
    {
        $this->app = new Application(require __DIR__ . '/config/main.php');
    }

    protected function tearDown()
    {
        $this->app = null;
    }

    public function testTest() {
       print_r($this->app);
    }
}