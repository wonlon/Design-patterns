<?php
/**
 * Created by PhpStorm.
 * User: "wanglong"
 * Date: 2018-5-18
 * Time: 14:11
 */
require '../../../vendor/autoload.php';

//先创建工厂
$chineseFactory = new \DesignPattern\Creational\AbstractFactory2\Factory\ChineseFactory();
$gemanyFactory = new \DesignPattern\Creational\AbstractFactory2\Factory\GemanyFactory();

//中国工厂生产产品
echo "============中国工厂生产产品==========".PHP_EOL;

$chineseBed = $chineseFactory->createBed();
$chineseBed->quality();

$chineseCabinet = $chineseFactory->createCabinet();
$chineseCabinet ->size();

$chineseLamp = $chineseFactory->createLamp();
$chineseLamp->luminance();


//德国工厂生产产品
echo "============德国工厂生产产品==========".PHP_EOL;
$gemanyBed = $gemanyFactory->createBed();
$gemanyBed->quality();
$gemanyLamp = $gemanyFactory->createLamp();
$gemanyLamp->luminance();
$gemanyCabinet = $gemanyFactory->createCabinet();
$gemanyCabinet->size();



