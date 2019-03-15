<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-25
 * Time: 14:30
 */

namespace DesignPattern\Structural\Adapter\ChinaWeather;


use DesignPattern\Structural\Adapter\HeWeather\HeWeather;


/**
 * 对象适配器
 * Class HeWeatherObjAdapter
 * @package DesignPattern\Structural\Adapter\ChinaWeather
 */
class HeWeatherObjAdapter implements WeaherInterface
{
    /**
     * @var HeWeather
     */
    private $heWeatherService;

    /**
     * 注入和风天气对象
     * HeWeatherAdapter constructor.
     * @param HeWeather $heWeatherService
     */
    public function __construct(HeWeather $heWeatherService)
    {
        $this->heWeatherService = $heWeatherService;
    }


    /**
     * 通过中国天气网的契约 适配和风天气
     * @param string $siteCode
     * @param $scope
     * @return array|mixed|string
     */
    public function getForecastInfo($siteCode = '', $scope)
    {
        // TODO: Implement getForecastInfo() method.
        $heForecastInfo = $this->heWeatherService->getForecast($siteCode);

        //经过一系列的数据处理，获得 $scope 的数据
        $heForecastInfo = "scope==>".$heForecastInfo;

        return $heForecastInfo;
    }

    /**
     * 通过中国天气网的契约 适配和风天气
     * @param string $siteCode
     * @return int|mixed
     */
    public function getAir($siteCode = '')
    {
        // TODO: Implement getAir() method.
        return $this->heWeatherService->getAirInfo($siteCode);

    }

    /**
     * 通过中国天气网的契约 适配和风天气
     * @param string $siteCode
     * @return int|mixed
     */
    public function humidity($siteCode = '')
    {
        // TODO: Implement humidity() method.
        return $this->heWeatherService->humidity($siteCode);
    }

}