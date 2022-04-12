<?php

namespace Creational\AbstractFactory\Html;

/**
 * html产品下的图片类型产品
 */
class Picture extends \Creational\AbstractFactory\Picture
{
    public function render()
    {
        return sprintf('<img src="%s" titile="%s" />', $this->path, $this->name);
    }

}