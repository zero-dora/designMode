<?php

namespace Behavioral\Observer;

class StockOberver implements ObserverInterface
{

    public function update()
    {
        print_r("关闭股票程序，认真上班\n");
    }
}