<?php
namespace app\components\custom;
use PhpDevil\base\Component;

/**
 * Class CustomComponent
 * Пример пользовательского компонента.
 *
 * @package app\components\custom
 */
class CustomComponent extends Component
{
    protected $_title;
    protected $_keywords;
    protected $_description;

    public function getTitle()
    {
        return $this->_title;
    }

    /**
     * Заглушка для теста - установка параметра через метод
     * @return bool
     */
    protected function configureValid()
    {
        return true;
    }

    public static function getConfig()
    {
        return [
            'title'       => 'Untitled Web Application',
            'keywords'    => 'Idea is to keep meta-tags in standalone application components',
            'description' => 'Really, it is only for test of abstract component creation'
        ];
    }
}