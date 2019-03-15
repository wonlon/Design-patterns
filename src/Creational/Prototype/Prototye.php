<?php
/**
 * Created by PhpStorm.
 * User: "wanglong"
 * Date: 2018-5-19
 * Time: 16:01
 */

namespace DesignPattern\Creational\Prototype;


interface Prototye
{
    /**
     * 深拷贝
     * @return mixed
     */
    public function deepCopy();

    /**
     * 浅拷贝
     * @return mixed
     */
    public function shallowCopy();

}