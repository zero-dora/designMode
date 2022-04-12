<?php

namespace Creational\AbstractFactory\Json;

class Text extends \Creational\AbstractFactory\Text
{
    public function render()
    {
        return json_decode(['content' => $this->content]);
    }

}