<?php

namespace Creational\AbstractFactory\Html;

class Text extends \Creational\AbstractFactory\Text
{
    public function render()
    {
        return '<div>' . htmlspecialchars($this->content) . '</div>';
    }

}