<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-18
 * Time: 11:51
 */

require __DIR__ . '/../../../vendor/autoload.php';
//1.简单工厂也是静态工厂
//2.setSome与上述的构造函数的作用差不多
//3.只有一个createDb静态区，多进程访问，需要等待，内存减少，但是，有串行排队

\DesignPattern\Creational\SimpleFactory\Factory::setSome();
$db = \DesignPattern\Creational\SimpleFactory\Factory::createDb("mysql");
$db->conn();
\DesignPattern\Creational\SimpleFactory\Factory::setSome();
$db = \DesignPattern\Creational\SimpleFactory\Factory::createDb("litesql");
$db->conn();