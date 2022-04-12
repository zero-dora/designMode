<?php

namespace Behavioral\TemplateMethod;

class TestB extends TestPaper
{
    protected function answer1()
    {
        return "d";
    }

    protected function answer2()
    {
        return "c";
    }

    protected function answer3()
    {
        return "b";
    }
}