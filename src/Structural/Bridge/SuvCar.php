<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-7-3
 * Time: 14:52
 */

namespace DesignPattern\Structural\Bridge;


class SuvCar implements ICar
{
    function Run()
    {
        echo "SUV车跑";
    }
}