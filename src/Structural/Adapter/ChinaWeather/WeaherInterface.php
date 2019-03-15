<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-25
 * Time: 11:44
 */

namespace DesignPattern\Structural\Adapter\ChinaWeather;


interface WeaherInterface
{
    /**
     * 获取天气预报
     * @param string $siteCode
     * @param $scope
     * @return mixed
     */
    public function getForecastInfo($siteCode = '', $scope);

    /**
     * 获取该城市当前的空气质量
     * @param string $siteCode
     * @return mixed
     */
    public function getAir($siteCode = '');

    /**
     * 获取当前的温度
     * @param string $siteCode
     * @return mixed
     */
    public function humidity($siteCode = '');
}