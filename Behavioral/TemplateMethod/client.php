<?php

namespace Behavioral\TemplateMethod;

require __DIR__ . '/../../vendor/autoload.php';

print_r("---------学生A试卷--------------\n");
$paperA = new TestA();
$paperA->question1();
$paperA->question2();
$paperA->question3();

print_r("---------学生B试卷--------------\n");
$paperB = new TestB();
$paperB->question1();
$paperB->question2();
$paperB->question3();