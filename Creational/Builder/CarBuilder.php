<?php

namespace Creational\Builder;

/**
 * 汽车建造者
 */
class CarBuilder implements BuilderInterface
{
    public function createVehicle()
    {
        print_r("建造一辆汽车.\n");
    }

    public function createWheel()
    {
        print_r("汽车需要前后各两个车轮，一共4个.\n");
    }

    public function createEngine()
    {
        print_r("汽车需要燃油或电力发动机驱动.\n");
    }

    public function createDoors()
    {
        print_r("汽车需要前后各两个车门，一共4个.\n");
    }


}