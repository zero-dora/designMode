<?php

namespace Creational\SimpleFactory;

class OperationMul extends Operation
{
    public function getResult()
    {
        return $this->numberA * $this->numberB;
    }
}