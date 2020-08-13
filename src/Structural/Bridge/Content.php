<?php
/**
 * Created by PhpStorm.
 * User: wanglong
 * Date: 2018/6/7
 * Time: 下午5:14
 */

namespace DesignPattern\Structural\Bridge;

/**
 * Interface Content 行为类接口
 *
 * @package DesignPattern\Structural\Bridge
 */
interface Content
{
    /**
     * getSize
     * 获取内容大小
     * @return mixed
     * Author:kinddylee@gmail.com
     */
    public function getSize();

    /**
     * getType
     * 获取内容类型
     * @return mixed
     * Author:kinddylee@gmail.com
     */
    public function getType();
}