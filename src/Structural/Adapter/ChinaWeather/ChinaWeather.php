<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-25
 * Time: 11:52
 */

namespace DesignPattern\Structural\Adapter\ChinaWeather;


class ChinaWeather implements WeaherInterface
{
    public function getForecastInfo($siteCode = '', $scope)
    {
        // TODO: Implement getForecastInfo() method.
        echo "城市：$siteCode,的【$scope】天气预报获取成功";
        return [
            '001'=>12,
            '002'=>11,
            '003'=>54,
        ];
    }

    public function getAir($siteCode = '')
    {
        // TODO: Implement getAir() method.
        echo "城市：$siteCode,的当前空气获取成功";
        return 12;
    }

    public function humidity($siteCode = '')
    {
        // TODO: Implement humidity() method.
        echo "城市：$siteCode,的当前湿度获取成功";
        return 13;
    }

}