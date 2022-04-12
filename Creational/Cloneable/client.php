<?php

namespace Creational\Cloneable;

require __DIR__ . '/../../vendor/autoload.php';

//浅拷贝
$resumeA = new Resume('zero');
$resumeA->setAge('30');
$resumeA->setSex('男');
$resumeA->setWorkExperience('2014-2015','a公司');


$resumeB = clone $resumeA;
$resumeB->setWorkExperience('2015-2016','b公司');


$resumeC = clone $resumeA;
$resumeC->setWorkExperience('2017-2018','C公司');


$resumeA->display();
$resumeB->display();
$resumeC->display();
print_r('-------------------------------------');

//深拷贝
$resumeD = new Resume2('zero');
$resumeD->setAge('30');
$resumeD->setSex('男');
$resumeD->setWorkExperience('2014-2015','a公司');


$resumeE = clone $resumeD;
$resumeE->setWorkExperience('2015-2016','b公司');


$resumeF = clone $resumeD;
$resumeF->setWorkExperience('2017-2018','C公司');


$resumeD->display();
$resumeE->display();
$resumeF->display();