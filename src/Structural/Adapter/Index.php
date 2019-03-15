<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-25
 * Time: 14:46
 */
require __DIR__ . '/../../../vendor/autoload.php';

//开始使用的中国天气网的天气

$chinaWeather = new \DesignPattern\Structural\Adapter\ChinaWeather\ChinaWeather();
$novaBusiness1 = new \DesignPattern\Structural\Adapter\Nova\Business($chinaWeather);
$novaBusiness1->run();


////随着业务的发展......

//国外需要使用和风天气

//1.0 对象适配器
$heWeatherService = new DesignPattern\Structural\Adapter\HeWeather\HeWeather();
$heWeatherObjAdapter = new \DesignPattern\Structural\Adapter\ChinaWeather\HeWeatherObjAdapter($heWeatherService);
$novaBusiness2 = new \DesignPattern\Structural\Adapter\Nova\Business($heWeatherObjAdapter);
$novaBusiness2->run();

//2.0 类适配器
$heWeatherClassAdapter = new \DesignPattern\Structural\Adapter\ChinaWeather\HeWeatherClassAdapter();
$novaBusiness3 = new \DesignPattern\Structural\Adapter\Nova\Business($heWeatherClassAdapter);
$novaBusiness3->run();


//3.0 接口适配器
//通过抽象类将接口中的一些方法进行屏蔽,
//实现的驱动去实现抽象类，就不用那么臃肿
$mysql = new \DesignPattern\Structural\Adapter\InterfaceAdapter\MysqlDriver();
$mysql->connection();
$mysql->selection();

