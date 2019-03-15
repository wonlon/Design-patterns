<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-21
 * Time: 19:32
 */

namespace DesignPattern\Creational\Builder\Build;


abstract  class BirdBuilder
{
    protected $_bird;

    function __construct()
    {
        $this->_bird=new Bird();
    }

    abstract function BuildHead();
    abstract function BuildWing();
    abstract function BuildFoot();
    abstract function GetBird();
}