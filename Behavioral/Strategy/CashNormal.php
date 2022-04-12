<?php

namespace Behavioral\Strategy;

/**
 * 正常收费子类
 */
class CashNormal extends CasheSuper
{
    public function acceptCash(float $money)
    {
        return $money;
    }

}