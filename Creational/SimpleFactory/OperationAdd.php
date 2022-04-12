<?php

namespace Creational\SimpleFactory;

class OperationAdd extends Operation
{
    public function getResult()
    {
        return $this->numberA + $this->numberB;
    }
}