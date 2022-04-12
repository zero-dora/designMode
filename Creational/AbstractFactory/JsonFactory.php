<?php

namespace Creational\AbstractFactory;

/**
 * json产品工厂类
 * 用来创建json产品 json下面有json类型的文本产品和json类型的图片产品
 */
class JsonFactory extends AbstractFactory
{
    public function createPicture($path, $name = '')
    {
        return new Json\Picture($path, $name);
    }

    public function createText($content)
    {
        return new Json\Text($content);
    }

}