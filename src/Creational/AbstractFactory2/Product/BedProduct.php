<?php
/**
 * Created by PhpStorm.
 * User: "zhangdan"
 * Date: 2018-5-17
 * Time: 17:06
 */

namespace DesignPattern\Creational\AbstractFactory2\Product;


abstract class BedProduct  implements ProductInterface
{
    /**
     * 床的质量
     */
    abstract public function quality();
}