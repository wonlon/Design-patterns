<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-7-3
 * Time: 14:47
 */

namespace DesignPattern\Structural\Bridge;


abstract class AbstractRoad
{
    public $icar;

    abstract function Run();
}