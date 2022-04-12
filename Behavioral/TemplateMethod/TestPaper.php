<?php

namespace Behavioral\TemplateMethod;

/**
 * 试题基类（模板类）
 */
abstract class TestPaper
{
    public function question1()
    {
        print_r("试题1，选择[ ] a.1 b.2 c.3 d.4\n");
        print_r("答案:" . $this->answer1()."\n");
    }

    protected function answer1()
    {
        return '';
    }

    public function question2()
    {
        print_r("试题2，选择[ ] a.1 b.2 c.3 d.4\n");
        print_r("答案:" . $this->answer2()."\n");
    }

    protected function answer2()
    {
        return '';
    }


    public function question3()
    {
        print_r("试题3，选择[ ] a.1 b.2 c.3 d.4\n");
        print_r("答案:" . $this->answer3()."\n");
    }

    protected function answer3()
    {
        return '';
    }
}