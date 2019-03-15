<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-18
 * Time: 13:02
 */
require __DIR__ . '/../../../vendor/autoload.php';

//创建IOS的产品簇
$iosFactory = new \DesignPattern\Creational\AbstactFactory\Factory\IosFactory();
$iosFactory->createButton();
$iosFactory->createPanel();

//创建安卓的产品簇
$andriodFactory = new \DesignPattern\Creational\AbstactFactory\Factory\AndriodFactory();
$andriodFactory->createButton();
$andriodFactory->createPanel();

