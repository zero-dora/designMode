<?php

namespace Structural\Proxy;

/**
 * 追求者类
 */
class Pursuit implements IGiveGift
{
    private SchoolGirl $mm;

    public function __construct(SchoolGirl $mm)
    {
        $this->mm = $mm;
    }

    public function GiveDolls()
    {
        print_r($this->mm->getName() . " 送你洋娃娃\n");
    }

    public function GiveFlowers()
    {
        print_r($this->mm->getName() . " 送你鲜花\n");
    }

    public function GiveChocolate()
    {
        print_r($this->mm->getName() . " 送你巧克力\n");
    }
}