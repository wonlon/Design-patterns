<?php
/**
 * Created by PhpStorm.
 * User: "zhangdan"
 * Date: 2018-5-17
 * Time: 14:18
 */

namespace DesignPattern\Creational\AbstractFactory2\Factory;


interface FactoryInterface
{
    /**
     * 生产一个柜子
     * @return mixed
     */
    public function createCabinet();

    /**
     * 生产一个灯
     * @return mixed
     */
    public function createLamp();

    /**
     * 生产一个床
     * @return mixed
     */
    public function createBed();

}