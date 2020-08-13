<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-18
 * Time: 12:54
 */

namespace DesignPattern\Creational\AbstractFactory\Product;


interface PanelInterface
{
    /**
     * 放大
     * @return mixed
     */
    public function big();

    /**
     * 缩小
     * @return mixed
     */
    public function small();
}