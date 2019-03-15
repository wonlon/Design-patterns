<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-7-3
 * Time: 14:12
 */

namespace DesignPattern\Structural\Composite;


class Playlist extends AbstractComponent
{
    private $media = [];

    function add(AbstractComponent $component)
    {
        // TODO: Implement add() method.
        $this->media[] = $component;
        echo  '向清单中增加'.$component->getName()."成功".PHP_EOL;
    }

    function remove(AbstractComponent $component)
    {
        $nodeName = $component->getName();
        // TODO: Implement remove() method.
        if(isset($this->media[$nodeName]))
        {
            unset($this->media[$nodeName]);
            echo  '删除'.$nodeName.'成功'.PHP_EOL;
        }
        else
        {
           echo  '该节点不存在'.PHP_EOL;
        }
    }

    function show($deep = 0)
    {
        echo str_repeat("-",$deep).$this->name;
        echo PHP_EOL;

        foreach($this->media as $value){
            $value->show($deep+4);
        }
    }
}