<?php

namespace Structural\Proxy;

/**
 * 被追求者类
 */
class SchoolGirl
{
    private string $name;

    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}