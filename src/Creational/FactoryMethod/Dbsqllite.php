<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-18
 * Time: 12:34
 */

namespace DesignPattern\Creational\FactoryMethod;


class Dbsqllite implements DbInterface
{
    function conn()
    {
        // TODO: Implement conn() method.
        echo "连接上了sqllite";
    }

}