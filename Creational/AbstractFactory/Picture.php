<?php

namespace Creational\AbstractFactory;

abstract class Picture implements MediaInterface
{
    protected string $path;
    protected string $name;

    public function __construct($path, $name = '')
    {
        $this->path = $path;
        $this->name = $name;
    }
}