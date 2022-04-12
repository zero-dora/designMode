<?php

namespace Creational\FactoryMethod;

/**
 * 学雷锋的大学生工厂类
 */
class UndergraduateFactory implements IFactory
{

    public function createLeifeng(): Leifeng
    {
        return new Undergraduate();
    }
}