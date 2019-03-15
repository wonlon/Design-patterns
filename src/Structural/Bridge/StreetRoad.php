<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-7-3
 * Time: 14:49
 */

namespace DesignPattern\Structural\Bridge;


class StreetRoad  extends AbstractRoad
{
    function Run()
    {
        $this->icar->Run();
        echo ":在乡村街道上。".PHP_EOL;
    }
}