<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-7-3
 * Time: 14:11
 */

namespace DesignPattern\Structural\Composite;


abstract class AbstractComponent
{
    protected $name;
    public function __construct($name){

        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    abstract function add(AbstractComponent $component);
    abstract function remove(AbstractComponent $component);
    abstract function show($deep);
}