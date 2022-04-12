<?php

namespace Structural\Facade;

/**
 * 基金类（门面类）
 */
class Fund
{
    private Stock1 $stock1;
    private Stock2 $stock2;
    private Stock3 $stock3;

    public function __construct()
    {
        $this->stock1 = new Stock1();
        $this->stock2 = new Stock2();
        $this->stock3 = new Stock3();
    }

    public function buyFund()
    {
        $this->stock1->buy();
        $this->stock2->buy();
        $this->stock3->buy();
    }

    public function sellerFund()
    {
        $this->stock1->sell();
        $this->stock2->sell();
        $this->stock3->sell();
    }
}