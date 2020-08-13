<?php
/**
 * Created by PhpStorm.
 * User: "zhangdan"
 * Date: 2018-5-18
 * Time: 14:24
 */

namespace DesignPattern\Creational\AbstractFactory2\Product;



class ChineseLamp extends LampProduct
{
    public function luminance()
    {
        echo "中国制造的灯，灯光很亮".PHP_EOL;
    }

}