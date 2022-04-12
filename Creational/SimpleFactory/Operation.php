<?php

namespace Creational\SimpleFactory;

/**
 * 运算类
 */
class Operation
{
    protected float $numberA = 0;
    protected float $numberB = 0;

    /**
     * @param float|int $numberA
     */
    public function setNumberA(float|int $numberA): void
    {
        $this->numberA = $numberA;
    }

    /**
     * @param float|int $numberB
     */
    public function setNumberB(float|int $numberB): void
    {
        $this->numberB = $numberB;
    }
    public function getResult()
    {
        return 0;
    }
}