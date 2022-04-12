<?php

namespace Behavioral\Strategy;

/**
 * 收费策略类(简单工厂方法)
 */
class CashContextFacory
{
    private CasheSuper $cs;

    public function __construct(string $type)
    {
        switch ($type) {
            case '正常收费':
                $this->cs = new CashNormal();
                break;
            case '满100返30':
                $this->cs = new CashReturn(100, 30);
                break;
            case '打8折':
                $this->cs = new CashRebate(0.8);
                break;
        }
    }

    public function getResult($money)
    {
        return $this->cs->acceptCash($money);
    }
}