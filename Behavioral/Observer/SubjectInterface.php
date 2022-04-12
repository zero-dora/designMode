<?php

namespace Behavioral\Observer;

interface  SubjectInterface
{

    /**
     * 添加观察者
     * @param ObserverInterface $observer
     * @return void
     */
    public function attach(ObserverInterface $observer);

    /**移除观察者
     * @param ObserverInterface $observer
     * @return mixed
     */
    public function detach(ObserverInterface $observer);

    /**
     * 通知观察者
     * @return mixed
     */
    public function notify();
}