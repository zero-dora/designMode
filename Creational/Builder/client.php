<?php

namespace Creational\Builder;

require __DIR__ . "/../../vendor/autoload.php";

$builder = new BikeBuilder();
$director = new Director($builder);
$director->create();

$builder = new CarBuilder();
$director = new Director($builder);
$director->create();