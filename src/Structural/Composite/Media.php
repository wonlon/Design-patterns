<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-7-3
 * Time: 14:19
 */

namespace DesignPattern\Structural\Composite;


class Media extends AbstractComponent
{

    function add(AbstractComponent $component)
    {
        // TODO: Implement add() method.
        echo  "媒体中不能添加媒体".PHP_EOL;
    }

    function remove(AbstractComponent $component)
    {
        // TODO: Implement remove() method.
        echo  "删除媒体成功".PHP_EOL;
    }

    function show($deep = 0)
    {
        echo str_repeat("-",$deep).$this->name;
        echo PHP_EOL;
    }
}