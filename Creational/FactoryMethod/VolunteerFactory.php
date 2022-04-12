<?php

namespace Creational\FactoryMethod;

/**
 * 社区自愿者工厂类
 */
class VolunteerFactory implements IFactory
{
    public function createLeifeng(): Leifeng
    {
        return new Volunteer();
    }

}