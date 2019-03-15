<?php


require '../../../../vendor/autoload.php';

$chinaOSSFactory = new DesignPattern\Homework\Guomengting\Structural\Flyweight\ChinaOSSFlyweightFactory();
$devOSS1 = $chinaOSSFactory->getInstance("dev_buket");
$devOSS2 = $chinaOSSFactory->getInstance("dev_buket");

var_dump($devOSS1===$devOSS2);

$testOSS = $chinaOSSFactory->getInstance("test_buket2");

var_dump($devOSS1===$testOSS);