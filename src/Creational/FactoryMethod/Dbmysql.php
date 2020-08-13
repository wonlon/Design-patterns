<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-18
 * Time: 11:57
 */

namespace DesignPattern\Creational\FactoryMethod;



class Dbmysql implements DbInterface
{
    function conn()
    {
        // TODO: Implement conn() method.
        echo "连接上了mysql".PHP_EOL;
    }
}