<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-21
 * Time: 19:34
 */

namespace DesignPattern\Creational\Builder\Production;


class Bird
{
    public $_head;
    public $_wing;
    public $_foot;

    function show()
    {
        echo "头的颜色:{$this->_head}<br/>";
        echo "翅膀的颜色:{$this->_wing}<br/>";
        echo "脚的颜色:{$this->_foot}<br/>";
    }
}