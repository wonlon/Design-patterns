<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-18
 * Time: 12:37
 */

require __DIR__ . '/../../../vendor/autoload.php';
$factory = new \DesignPattern\Creational\FactoryMethod\MysqlFactory();
$db = $factory->createDb();
$db->conn();