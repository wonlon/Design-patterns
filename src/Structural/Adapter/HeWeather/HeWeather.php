<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-25
 * Time: 14:11
 */

namespace DesignPattern\Structural\Adapter\HeWeather;


class HeWeather implements HeWeatherInterface
{
    public function getForecast($siteCode = '')
    {
        // TODO: Implement getForecast() method.
        echo "获取城市：$siteCode 的预报天气成功";
        return [
            '001'=>12,
            '002'=>02,
            '003'=>23,
        ];
    }

    public function getAirInfo($siteCode = '')
    {
        // TODO: Implement getAirInfo() method.
        echo "获取城市：$siteCode 当前的空气质量成功";
        return 23;
    }

    public function humidity($siteCode = '')
    {
        // TODO: Implement humidity() method.
        echo "获取城市：$siteCode 当前的湿度成功";
        return 12;
    }

}