<?php
namespace Creational\AbstractFactory;

/**
 * 抽象工厂类
 *
 */
abstract class AbstractFactory
{
    /**
     * 创建文本产品
     * @param $content
     * @return mixed
     */
    abstract public function createText($content);

    /**
     * 创建图片产品
     * @param $path
     * @param $name
     * @return mixed
     */
    abstract public function createPicture($path,$name='');

}