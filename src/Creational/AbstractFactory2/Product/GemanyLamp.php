<?php
/**
 * Created by PhpStorm.
 * User: "zhangdan"
 * Date: 2018-5-18
 * Time: 14:26
 */

namespace DesignPattern\Creational\AbstractFactory2\Product;



class GemanyLamp extends LampProduct
{

    /**
     * 灯的亮度
     */
    public function luminance()
    {
        echo "德国制造的灯，灯光很温馨".PHP_EOL;
    }
}