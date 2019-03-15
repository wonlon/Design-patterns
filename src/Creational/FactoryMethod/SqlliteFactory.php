<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-18
 * Time: 12:36
 */

namespace DesignPattern\Creational\FactoryMethod;


class SqlliteFactory implements Factory
{
    function createDb()
    {
        // TODO: Implement createDb() method.
        return new Dbsqllite();
    }

}