<?php
/**
 * Created by PhpStorm.
 * User: "zhangdan"
 * Date: 2018-5-18
 * Time: 14:27
 */

namespace DesignPattern\Creational\AbstractFactory2\Product;



class ChineseCabinet extends CabinetProduct
{

    /**
     * 柜子的尺寸
     */
    public function size()
    {
        echo "中国制造的柜子尺寸是 2*2*2".PHP_EOL;
    }
}