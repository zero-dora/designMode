<?php
namespace Creational\Strategy;
use Behavioral\Strategy\CashContext;
use Behavioral\Strategy\CashContextFacory;
use Behavioral\Strategy\CashNormal;
use Behavioral\Strategy\CashRebate;
use Behavioral\Strategy\CashReturn;

require __DIR__ . '/../../vendor/autoload.php';
print_r("----------普通策略模式---------------\n");
$cashContext = new CashContext(new CashNormal());
$result = $cashContext->getResult(201);
print_r($result);
print_r("\n");

$cashContext = new CashContext(new CashRebate(0.8));
$result = $cashContext->getResult(201);
print_r($result);
print_r("\n");


$cashContext = new CashContext(new CashReturn(100,30));
$result = $cashContext->getResult(201);
print_r($result);
print_r("\n");

print_r("----------策略模式加简单工厂模式---------------\n");
$result = (new CashContextFacory('正常收费'))->getResult(201);
print_r($result);
print_r("\n");

$result = (new CashContextFacory('打8折'))->getResult(201);
print_r($result);
print_r("\n");

$result = (new CashContextFacory('满100返30'))->getResult(201);
print_r($result);
print_r("\n");


