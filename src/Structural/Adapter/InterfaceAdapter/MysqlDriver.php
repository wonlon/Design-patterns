<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-25
 * Time: 15:03
 */

namespace DesignPattern\Structural\Adapter\InterfaceAdapter;


/**
 * 通过抽象类InterfaceAdapterAbstract,将DataBaseInterface中的接口屏蔽一部分，导致MysqlDriver，不那么臃肿
 * Class MysqlDriver
 * @package DesignPattern\Structural\Adapter\InterfaceAdapter
 */
class MysqlDriver extends InterfaceAdapterAbstract
{
    public function selection()
    {
        // TODO: Implement selection() method.
        echo "进行数据库的查询".PHP_EOL;
        return [];
    }

    public function connection()
    {
        // TODO: Implement connection() method.
        echo "进行数据的链接".PHP_EOL;
        return true;
    }

}