<?php
/**
 * Created by PhpStorm.
 * User: "zhangdan"
 * Date: 2018-5-18
 * Time: 14:23
 */

namespace DesignPattern\Creational\AbstractFactory2\Product;



class GemanyBed extends BedProduct
{

    /**
     * 床的质量
     */
    public function quality()
    {
        echo "德国制造的床质量很好".PHP_EOL;
    }
}