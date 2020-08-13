<?php
/**
 * Created by PhpStorm.
 * User: "zhangdan"
 * Date: 2018-5-17
 * Time: 14:26
 */

namespace DesignPattern\Creational\AbstractFactory2\Factory;



use DesignPattern\Creational\AbstractFactory2\Product\ChineseBed;
use DesignPattern\Creational\AbstractFactory2\Product\ChineseCabinet;
use DesignPattern\Creational\AbstractFactory2\Product\ChineseLamp;

class ChineseFactory implements FactoryInterface
{
    public function createCabinet()
    {
        echo "生产一个中国的柜子".PHP_EOL;
        return new ChineseCabinet();
    }

    public function createLamp()
    {
        echo "生产一个中国的灯".PHP_EOL;
        return new ChineseLamp();
    }

    public function createBed()
    {
        echo "生产一个中国的床".PHP_EOL;
        return new ChineseBed();
    }

}