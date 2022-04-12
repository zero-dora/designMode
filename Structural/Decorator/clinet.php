<?php

namespace Structural\Decorator;
require __DIR__ . '/../../vendor/autoload.php';

$person = new Person("zero");
print_r("-------第一种装扮---------\n");

$pqx = new Sneakers();
$kk = new BigTrouser();
$dtx = new TShirts();

$pqx->decorate($person);
$kk->decorate($pqx);
$dtx->decorate($kk);
$dtx->show();

print_r("-------第二种装扮---------\n");

$xz= new Suit();
$kk = new BigTrouser();
$dtx = new TShirts();

$xz->decorate($person);
$kk->decorate($xz);
$dtx->decorate($kk);
$dtx->show();

