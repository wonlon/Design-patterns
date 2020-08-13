<?php
/**
 * Created by PhpStorm.
 * User: wanglong
 * Date: 2018/6/7
 * Time: 下午5:16
 */

namespace DesignPattern\Structural\Bridge;

/**
 * Class [JsonStream]
 * 行为类实现
 *
 * @package  DesignPattern\Structural\Bridge
 * @author   wanglong <longgwang@tencent.com>
 */
class JsonStream implements Content
{
    /**
     * getSize
     * 获取内容大小
     * @return mixed
     * Author:kinddylee@gmail.com
     */
    public function getSize()
    {
        echo "流大小：X（MB）" . PHP_EOL;
    }

    /**
     * getType
     * 获取内容类型
     * @return mixed
     * Author:kinddylee@gmail.com
     */
    public function getType()
    {
        echo "JSON" . PHP_EOL;
    }

}