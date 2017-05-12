<?php
namespace tests\basic;
use app\Application;
use app\components\custom\CustomComponent;
use PhpDevil\exceptions\InvalidComponentClassException;
use PhpDevil\exceptions\InvalidConfigParamException;
use PhpDevil\exceptions\UnknownComponentException;
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

    /**
     * Тест создания компонента с конфигурацией по умолчанию
     */
    public function testTest()
    {
        $this->assertEquals('Untitled Web Application', $this->app->test->getTitle());
    }

    /**
     * Тест создания компонента того же класса с перегрузкой параметра конфигурации
     */
    public function testTest2()
    {
        $this->assertEquals('Override Title', $this->app->test2->getTitle());
    }

    /**
     * Динамическое подключение компонента. Параметр valid конфигурируется методом
     */
    public function testCreateValid()
    {
        $this->app->registerComponent('valid', [
            'class' => CustomComponent::class,
            'title' =>'valid',
            'valid' => 'somevalue'
        ]);
        $this->assertEquals('valid', $this->app->valid->getTitle());
    }

    /**
     * Динамическое подключение компонента. Параметр valid конфигурируется методом
     */
    public function testCreateInvalidClass()
    {
        $this->expectException(InvalidComponentClassException::class);
        $this->app->registerComponent('valid', [
            'title' =>'valid',
            'valid' => 'somevalue'
        ]);
    }

    /**
     * Динамическое подключение компонента. Параметр valid конфигурируется методом
     */
    public function testCreateInvalidProperty()
    {
        $this->expectException(InvalidConfigParamException::class);
        $this->app->registerComponent('invalid', [
            'class' => CustomComponent::class,
            'title' =>'invalid',
            'invalidProperty' => 'somevalue'
        ]);
        $this->app->invalid->getTitle();
    }

    public function testUnknownComponentException()
    {
        $this->expectException(UnknownComponentException::class);
        $this->app->unknownComponent;
    }
}