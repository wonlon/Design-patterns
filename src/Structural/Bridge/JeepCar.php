<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-7-3
 * Time: 14:51
 */

namespace DesignPattern\Structural\Bridge;


class JeepCar implements ICar
{
    function Run()
    {
        echo "吉普车跑";
    }
}