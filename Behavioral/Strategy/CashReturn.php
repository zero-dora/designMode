<?php

namespace Behavioral\Strategy;

/**
 * 返利收费子类
 */
class CashReturn extends CasheSuper
{
    private float $moneyCondition;
    private float $moneyReturn;

    public function __construct(float $moneyCondition, float $moneyReturn)
    {
        $this->moneyCondition = $moneyCondition;
        $this->moneyReturn = $moneyReturn;
    }

    public function acceptCash(float $money)
    {
        $result = $money;
        if ($money > $this->moneyCondition) {
            $result = $result - floor($money / $this->moneyCondition) * $this->moneyReturn;
        }
        return $result;
    }

}