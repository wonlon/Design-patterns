<?php
/**
 * Created by PhpStorm.
 * User: "zhangdan"
 * Date: 2018-5-17
 * Time: 17:06
 */

namespace DesignPattern\Creational\AbstractFactory2\Product;


abstract class LampProduct  implements ProductInterface
{
    /**
     * 灯的亮度
     */
    abstract public function luminance();
}