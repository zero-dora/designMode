<?php

namespace Structural\Facade;
/**
 * 股票类1
 */
class Stock1
{
    public function buy()
    {
        print_r("股票1,买入\n");
    }

    public function sell()
    {
        print_r("股票1,卖出\n");
    }
}