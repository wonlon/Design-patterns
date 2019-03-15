<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-17
 * Time: 16:35
 */

namespace DesignPattern\Structural\Decorator;

interface ArtInterface {
    /**
     * 抽象的-文章组件角色
     *
     * @return mixed
     */
    public function decorator();
}