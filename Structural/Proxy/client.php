<?php

namespace Structural\Proxy;

require __DIR__ . '/../../vendor/autoload.php';

$mm = new SchoolGirl();
$mm->setName('李娇娇');

$proxy = new Proxy($mm);

$proxy->GiveDolls();
$proxy->GiveFlowers();
$proxy->GiveChocolate();