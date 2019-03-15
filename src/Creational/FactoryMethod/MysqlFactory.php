<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-18
 * Time: 12:35
 */

namespace DesignPattern\Creational\FactoryMethod;


class MysqlFactory implements Factory
{
    function createDb()
    {
        // TODO: Implement createDb() method.
        return new Dbmysql();
    }

}