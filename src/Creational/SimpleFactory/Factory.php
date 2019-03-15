<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-18
 * Time: 11:49
 */

namespace DesignPattern\Creational\SimpleFactory;


class Factory
{
    public static function createDb( $type )
    {
        switch ($type)
        {
            case "mysql":
                return new  Dbmysql();
                break;
            case "litesql":
                return new  Dbsqllite();
                break;
            default:
                return null;
                break;
        }
    }
    public static function setSome()
    {
    }
}