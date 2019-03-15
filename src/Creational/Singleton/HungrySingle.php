<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-19
 * Time: 16:08
 */

namespace DesignPattern\Creational\Singleton;

/**
 * 单例模式-饿汉模式（php没有饿汉模式）
 * Class HungrySingle
 * @package DesignPattern\Creational\Singleton
 */
class HungrySingle
{
    //1.构造函数前面加 protected，单例类禁止new
    //2.使用一个静态的方法，生产出一个唯一的实例
    //3. 构造函数前面加 final,防止被继承，修改单例的权限（实例不唯一）
    //4.final封锁clone方法，防止实例被克隆


    //PHP没有
    //private static final $newInstance = new HungrySingle();

    final protected  function __construct()
    {
    }
    //方法前面加final，方法不能被覆盖，类前面加final类不能被继承
    final protected function __clone()
    {
        // TODO: Implement __clone() method.
    }
    public static function getInts()
    {
        //return $newInstance;
    }
}