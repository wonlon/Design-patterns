<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-7-3
 * Time: 14:31
 */
require '../../../../vendor/autoload.php';
$speedRoad = new \DesignPattern\Structural\Bridge\SpeedRoad();
$speedRoad->icar = new \DesignPattern\Structural\Bridge\SuvCar();
$speedRoad->Run();
echo  "===============================================".PHP_EOL;

$streetRoad = new \DesignPattern\Structural\Bridge\StreetRoad();
$streetRoad->icar = new \DesignPattern\Structural\Bridge\JeepCar();
$streetRoad->Run();

