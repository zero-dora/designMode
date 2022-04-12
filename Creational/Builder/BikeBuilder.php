<?php

namespace Creational\Builder;

/**
 * 单车建造者
 */
class BikeBuilder implements BuilderInterface
{

    public function createVehicle()
    {
        print_r("建造一辆单车.\n");
    }

    public function createWheel()
    {
        print_r("单车需要前后两个车轮.\n");
    }

    public function createEngine()
    {
        print_r("单车需要人力驱动.\n");
    }

    public function createDoors()
    {
        // TODO: Implement createDoors() method.
    }
}