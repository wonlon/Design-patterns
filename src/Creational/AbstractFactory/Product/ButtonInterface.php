<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-18
 * Time: 12:53
 */

namespace DesignPattern\Creational\AbstractFactory\Product;


interface ButtonInterface
{
    /**
     * 按下
     * @return mixed
     */
    public function down();

    /**
     * 升起
     * @return mixed
     */
    public function up();
}