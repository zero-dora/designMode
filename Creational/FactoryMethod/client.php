<?php

namespace Creational\FactoryMethod;

require __DIR__ . '/../../vendor/autoload.php';

$facorty = new UndergraduateFactory();
$leifeng = $facorty->createLeifeng();

$leifeng->sweep();
$leifeng->wash();
$leifeng->buyRice();