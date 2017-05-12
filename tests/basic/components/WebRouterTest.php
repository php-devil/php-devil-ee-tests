<?php
namespace basic\components;
use app\Application;
use PhpDevil\web\http\RequestHandler;
use PHPUnit\Framework\TestCase;

class WebRouterTest extends TestCase
{
    protected $router = null;
    protected $app = null;

    protected function setUp()
    {
        $this->app = new Application();
        $this->router = $this->app->router;
    }

    protected function tearDown()
    {
        $this->app->end();
        $this->app = null;
        $this->router = null;
    }

    public function testIndexPage()
    {
        $hr = new RequestHandler('/');
        $this->router->handleRequest($hr);
        $direct = $this->router->getDirectRequest('before');
        $this->assertEquals(['default', 'index'], $direct);
    }

    public function testInnerPage()
    {
        $hr = new RequestHandler('/props/');
        $this->router->handleRequest($hr);
        $direct = $this->router->getDirectRequest('before');
        $this->assertEquals(['settings', 'test', 'test'], $direct);
    }

    public function testUnknownUrlNull()
    {
        $hr = new RequestHandler('/some/unknown/url/of/app/');
        $this->router->handleRequest($hr);
        $this->assertNull($this->router->getDirectRequest('before'));
    }

    public function testAppDirectActionPergorming()
    {
        $result = null;
        $hr = new RequestHandler('/test/');
        $this->router->handleRequest($hr);
        if ($direct = $this->router->getDirectRequest('before')) {
            $result = $this->app->performDirectRequest($direct);
        }
        $this->assertEquals('actionTest of app DefaultController', $result);
    }
}