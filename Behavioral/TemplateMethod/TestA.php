<?php

namespace Behavioral\TemplateMethod;

class TestA extends TestPaper
{
    protected function answer1()
    {
        return "a";
    }

    protected function answer2()
    {
        return "b";
    }

    protected function answer3()
    {
        return "c";
    }
}