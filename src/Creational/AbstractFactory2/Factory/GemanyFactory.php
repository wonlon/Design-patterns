<?php
/**
 * Created by PhpStorm.
 * User: "zhangdan"
 * Date: 2018-5-17
 * Time: 14:29
 */

namespace DesignPattern\Creational\AbstractFactory2\Factory;



use DesignPattern\Creational\AbstractFactory2\Product\GemanyBed;
use DesignPattern\Creational\AbstractFactory2\Product\GemanyCabinet;
use DesignPattern\Creational\AbstractFactory2\Product\GemanyLamp;

class GemanyFactory implements FactoryInterface
{
    public function createCabinet()
    {
        echo "生产一个德国的柜子".PHP_EOL;
        return new GemanyCabinet();
    }

    public function createLamp()
    {
        echo "生产一个德国的灯".PHP_EOL;
        return new GemanyLamp();
    }

    public function createBed()
    {
        echo "生产一个德国的床".PHP_EOL;
        return new GemanyBed();
    }

}