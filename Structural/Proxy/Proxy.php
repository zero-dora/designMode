<?php

namespace Structural\Proxy;

use JetBrains\PhpStorm\Pure;

/**
 * 追求者代理类
 */
class Proxy implements IGiveGift
{
    private Pursuit $gg;

    public function __construct(SchoolGirl $mm)
    {
        $this->gg = new Pursuit($mm);
    }

    public function GiveDolls()
    {
        $this->gg->GiveDolls();
    }

    public function GiveFlowers()
    {
        $this->gg->GiveFlowers();
    }

    public function GiveChocolate()
    {
        $this->gg->GiveChocolate();
    }
}