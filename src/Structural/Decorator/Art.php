<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-17
 * Time: 16:35
 */
namespace DesignPattern\Structural\Decorator;

class Art implements ArtInterface {


    /**
     * 基础组件-文章基础组件
     * @return mixed
     */
    public function decorator()
    {
        echo  '我是一篇草稿'.PHP_EOL;
    }
}