<?php

namespace Creational\AbstractFactory;

/**
 * html产品工厂类
 * 用来创建html产品 html下面有html类型的文本产品和html类型的图片产品
 */
class HtmlFactory extends AbstractFactory
{
    public function createText($content)
    {
        return new Html\Text($content);
    }

    public function createPicture($path, $name = '')
    {
        return new Html\Picture($path,$name);
    }

}