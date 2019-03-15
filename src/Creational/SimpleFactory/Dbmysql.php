<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-18
 * Time: 11:46
 */

namespace DesignPattern\Creational\SimpleFactory;


class Dbmysql implements DbInterface
{
    /**
     * 实现db接口的方法
     */
    function conn()
    {
        // TODO: Implement conn() method.
        echo "连接上了mysql";
    }

}