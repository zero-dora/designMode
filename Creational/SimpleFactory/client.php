<?php

namespace Creational\SimpleFactory;
require __DIR__ . '/../../vendor/autoload.php';
$oper = OperationFactory::createOperate('+');
$oper->setNumberA(1);
$oper->setNumberB(2);
print_r($oper->getResult());
print_r("\n");

$oper = OperationFactory::createOperate('-');
$oper->setNumberA(3);
$oper->setNumberB(1);
print_r($oper->getResult());
print_r("\n");

$oper = OperationFactory::createOperate('*');
$oper->setNumberA(4);
$oper->setNumberB(5);
print_r($oper->getResult());
print_r("\n");

$oper = OperationFactory::createOperate('/');
$oper->setNumberA(6);
$oper->setNumberB(7);
print_r($oper->getResult());
print_r("\n");
