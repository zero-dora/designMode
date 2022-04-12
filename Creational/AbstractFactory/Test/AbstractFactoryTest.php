<?php

namespace Creational\AbstractFactory\Test;

use Creational\AbstractFactory\AbstractFactory;
use Creational\AbstractFactory\HtmlFactory;
use Creational\AbstractFactory\JsonFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{

    public function getFactories()
    {
        return [
            [new HtmlFactory()],
            [new JsonFactory()]
        ];
    }

    /**
     * @dataProvider getFactories
     */
    public function testComponentCreation(AbstractFactory $factory)
    {
        $article = [
            $factory->createText('zero学习设计模式'),
            $factory->createPicture('/image.jpg','zero设计模式'),
            $factory->createText('设计模式')
        ];
        $this->assertContainsOnly('Creational\AbstractFactory\MediaInterface',$article);
    }
}