<?php

namespace Creational\AbstractFactory\Json;

/**
 * json产品的图片类型产品
 */
class Picture extends \Creational\AbstractFactory\Picture
{
    public function render()
    {
        return json_encode(['title' => $this->name, 'path' => $this->path]);
    }

}