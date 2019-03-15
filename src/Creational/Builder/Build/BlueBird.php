<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-21
 * Time: 19:35
 */

namespace DesignPattern\Creational\Builder\Build;


class BlueBird extends BirdBuilder
{
    function BuildHead()
    {
        // TODO: Implement BuildHead() method.
        $this->_bird->_head="Blue";
    }

    function BuildWing()
    {
        // TODO: Implement BuildWing() method.
        $this->_bird->_wing="Blue";
    }

    function BuildFoot()
    {
        // TODO: Implement BuildFoot() method.
        $this->_bird->_foot="Blue";
    }

    function GetBird()
    {
        // TODO: Implement GetBird() method.
        return $this->_bird;
    }

}