<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-21
 * Time: 19:36
 */

namespace DesignPattern\Creational\Builder\Build;


class RoseBird extends BirdBuilder
{
    function BuildHead()
    {
        // TODO: Implement BuildHead() method.
        $this->_bird->_head="Red";
    }

    function BuildWing()
    {
        // TODO: Implement BuildWing() method.
        $this->_bird->_wing="Black";
    }

    function BuildFoot()
    {
        // TODO: Implement BuildFoot() method.
        $this->_bird->_foot="Green";
    }

    function GetBird()
    {
        // TODO: Implement GetBird() method.
        return $this->_bird;
    }

}