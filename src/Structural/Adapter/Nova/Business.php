<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-25
 * Time: 14:15
 */

namespace DesignPattern\Structural\Adapter\Nova;


use DesignPattern\Structural\Adapter\ChinaWeather\WeaherInterface;

class Business
{
    /**
     * 天气接口类型
     * @var WeaherInterface
     */
    private $weatherService;

    /**
     * 注入天气接口类型的参数
     * Business constructor.
     * @param WeaherInterface $weatherService
     */
    public function __construct( WeaherInterface $weatherService)
    {
        $this->weatherService = $weatherService;
    }

    public function run()
    {
        //获取预报信息
        $forecastInfo = $this->weatherService->getForecastInfo("001",'24h');
        echo "Nova终端业务获取天气预报成功。".PHP_EOL;
        print_r($forecastInfo);

        //获取该城市空气质量信息
        $airInfo = $this->weatherService->getAir("001");
        echo "Nova终端业务获取空气质量成功。".PHP_EOL;
        print_r($airInfo);

        //获取该城市湿度信息
        $humidityInfo = $this->weatherService->humidity("001");
        echo "Nova终端业务获取湿度信息成功。".PHP_EOL;
        print_r($humidityInfo);
    }
}