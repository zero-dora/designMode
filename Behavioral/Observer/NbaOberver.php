<?php

namespace Behavioral\Observer;

class NbaOberver implements ObserverInterface
{
    public function update()
    {
        print_r("关闭nba直播，认真上班\n");
    }

}