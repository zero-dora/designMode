<?php

namespace Behavioral\Observer;

require __DIR__ . "/../../vendor/autoload.php";

$subject = new BossSubject();

$stockOberver = new StockOberver();
$nbaObserver = new NbaOberver();

$subject->attach($stockOberver);
$subject->attach($nbaObserver);
$subject->notify();
