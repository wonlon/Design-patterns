<?php


require __DIR__ . '/../../../vendor/autoload.php';

$wsFactory = new \DesignPattern\Structural\Flyweight\WebSocketConfigFlyweightFactory();
$devWS1 = $wsFactory->getInstance("dev_buket", "8000");
$devWS2 = $wsFactory->getInstance("dev_buket","8000");

var_dump($devWS1===$devWS2);
//修改外蕴属性
$devWS3 = $devWS1->changeHost('test_buket');

//构建新属性
$testWS = $wsFactory->getInstance("test_buket2", "8002");

var_dump($devWS1===$devWS3);
var_dump($devWS1===$testWS);