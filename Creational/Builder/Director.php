<?php

namespace Creational\Builder;
/**
 * Director（指挥者类） 是建造者模式的一部分，它知道建造者接口并通过建造者构建复杂对象。
 *
 * 可以通过依赖注入建造者的方式构造任何复杂对象
 */
class Director
{
    private BuilderInterface $builder;

    public function __construct(BuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    public function create()
    {
        $this->builder->createVehicle();
        $this->builder->createWheel();
        $this->builder->createEngine();
        $this->builder->createDoors();
    }
}