<?php

namespace Behavioral\Strategy;

/**
 * 收费策略类
 */
class CashContext
{
    private CasheSuper $cs;

    public function __construct(CasheSuper $cs)
    {
        $this->cs = $cs;
    }

    public function getResult($money)
    {
        return $this->cs->acceptCash($money);
    }
}