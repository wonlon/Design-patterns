<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-18
 * Time: 11:48
 */

namespace DesignPattern\Creational\SimpleFactory;


class Dbsqllite implements DbInterface
{
    /**
     * 实现db接口的方法
     */
    function conn()
    {
        // TODO: Implement conn() method.
        echo "连接上了sqllite";
    }

}