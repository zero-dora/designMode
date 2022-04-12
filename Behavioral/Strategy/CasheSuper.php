<?php
namespace Behavioral\Strategy;
/**
 * 现金收费抽象类
 */
abstract class CasheSuper
{
    public abstract function acceptCash(float $money);
}