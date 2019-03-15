<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-18
 * Time: 12:51
 */

namespace DesignPattern\Creational\AbstactFactory\Factory;


interface Factory
{
    /**
     * 创建按钮
     * @return mixed
     */
    public function createButton();

    /**
     * 创建面板
     * @return mixed
     */
    public function createPanel();
}