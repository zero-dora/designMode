<?php

namespace Creational\SimpleFactory;

class OperationSub extends Operation
{
    public function getResult()
    {
        return $this->numberA - $this->numberB;
    }
}