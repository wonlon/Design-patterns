<?php
/**
 * Created by PhpStorm.
 * User: "zhangdan"
 * Date: 2018-5-17
 * Time: 14:30
 */

namespace DesignPattern\Creational\AbstractFactory2\Product;


abstract class CabinetProduct implements ProductInterface
{
    /**
     * 柜子的尺寸
     */
    abstract public function size();

}