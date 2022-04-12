<?php

namespace Creational\SimpleFactory;

/**
 * 简单工厂类 用于创建具体操作对象
 */
class OperationFactory
{
    public static function createOperate(string $operate): Operation
    {
        $oper = null;
        switch ($operate) {
            case '+':
                $oper = new OperationAdd();
                break;
            case '-':
                $oper = new OperationSub();
                break;
            case '*':
                $oper = new OperationMul();
                break;
            case '/':
                $oper = new OperationDiv();
                break;
        }
        return $oper;
    }
}