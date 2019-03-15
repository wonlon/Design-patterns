<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-25
 * Time: 12:01
 */

namespace DesignPattern\Structural\Adapter\HeWeather;


interface HeWeatherInterface
{
    /**
     * 获取天气预报
     * @param string $siteCode
     * @return mixed
     */
    public function getForecast($siteCode = '');

    /**
     * 获取该城市当前的空气质量
     * @param string $siteCode
     * @return mixed
     */
    public function getAirInfo($siteCode = '');

    /**
     * 获取当前的温度
     * @param string $siteCode
     * @return mixed
     */
    public function humidity($siteCode = '');
}