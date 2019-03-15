<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-7-3
 * Time: 14:47
 */

namespace DesignPattern\Structural\Bridge;


class SpeedRoad extends AbstractRoad
{
    function Run()
    {
        $this->icar->Run();
        echo ":在高速公路上。".PHP_EOL;
    }
}