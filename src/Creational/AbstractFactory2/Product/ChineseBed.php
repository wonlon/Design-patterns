<?php
/**
 * Created by PhpStorm.
 * User: "zhangdan"
 * Date: 2018-5-18
 * Time: 14:21
 */

namespace DesignPattern\Creational\AbstractFactory2\Product;



class ChineseBed extends BedProduct
{
    public function quality()
    {
        echo "中国制造的床质量不错".PHP_EOL;
    }

}