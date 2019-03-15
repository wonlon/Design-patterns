<?php
/**
 * Created by PhpStorm.
 * User: wanglong
 * Date: 2018-5-19
 * Time: 16:26
 */

namespace DesignPattern\Creational\Prototype;


class Dog implements Prototye
{

    private $name;

    /**
     * Dog constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * 获取名字
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 设置名字
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    /**
     * 深拷贝
     * @return mixed
     */
    public function deepCopy()
    {
        return clone $this;
    }

    /**
     * 浅拷贝
     * @return mixed
     */
    public function shallowCopy()
    {
        // TODO: Implement shallowCopy() method.
        return new Dog('xxx');
    }
}