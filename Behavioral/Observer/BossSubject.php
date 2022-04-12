<?php

namespace Behavioral\Observer;

class BossSubject implements SubjectInterface
{
    protected $observers;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    /**
     * 添加观察者
     * @param ObserverInterface $observer
     * @return void
     */
    public function attach(ObserverInterface $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(ObserverInterface $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        print_r("老板回来了\n");
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }
}