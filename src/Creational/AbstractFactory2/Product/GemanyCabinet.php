<?php
/**
 * Created by PhpStorm.
 * User: "zhangdan"
 * Date: 2018-5-18
 * Time: 14:28
 */

namespace DesignPattern\Creational\AbstractFactory2\Product;



class GemanyCabinet extends CabinetProduct
{
    public function size()
    {
        echo "德国制造的柜子尺寸为： 1*2*1".PHP_EOL;
    }

}