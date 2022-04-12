<?php

namespace Behavioral\Strategy;

/**
 * 打折收费子类
 */
class CashRebate extends CasheSuper
{
    private float $moneyRebate;

    public function __construct(float $moneyRebate)
    {
        $this->moneyRebate = $moneyRebate;
    }

    public function acceptCash(float $money)
    {
        return $money * $this->moneyRebate;
    }

}