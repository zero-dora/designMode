<?php

namespace Creational\AbstractFactory;

abstract class Text implements MediaInterface
{
    protected string $content;

    public function __construct($content)
    {
        $this->content = $content;
    }
}