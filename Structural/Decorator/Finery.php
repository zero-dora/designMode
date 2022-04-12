<?php

namespace Structural\Decorator;

class Finery extends Person
{
    protected Person $person;

    public function __construct()
    {
    }

    public function decorate(Person $person)
    {
        $this->person = $person;
    }

    public function show()
    {
        $this->person->show();
    }
}