<?php
/**
 * Created by PhpStorm.
 * User: wanglong
 * Date: 2018/6/7
 * Time: 下午5:15
 */

namespace DesignPattern\Structural\Bridge;

/**
 * Class [Mp3Content]
 * 行为类实现
 *
 * @package  DesignPattern\Structural\Bridge
 * @author   wanglong <longgwang@tencent.com>
 */
class Mp3Content implements Content
{
    /**
     * getSize
     * 获取内容大小
     * @return mixed
     * Author:kinddylee@gmail.com
     */
    public function getSize()
    {
        echo "文件大小：xxx (MB)" . PHP_EOL;
    }

    /**
     * getType
     * 获取内容类型
     * @return mixed
     * Author:kinddylee@gmail.com
     */
    public function getType()
    {
        echo "MP3" . PHP_EOL;
    }

}