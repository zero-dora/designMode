<?php

namespace Creational\SimpleFactory;

class OperationDiv extends Operation
{
    public function getResult()
    {
        if ($this->numberB == 0) throw new \Exception('除数不能为0');
        return $this->numberA / $this->numberB;
    }
}