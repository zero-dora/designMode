<?php

namespace Creational\Builder;

/**
 * 车辆建造者接口
 */
interface BuilderInterface
{
    //创建车辆
    public function createVehicle();

    //创建车轮
    public function createWheel();

    //创建发动机
    public function createEngine();

    //创建车门
    public function createDoors();
}