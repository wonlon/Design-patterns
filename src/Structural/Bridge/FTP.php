<?php
/**
 * Created by PhpStorm.
 * User: wanglong
 * Date: 2018/6/7
 * Time: 下午5:21
 */

namespace DesignPattern\Structural\Bridge;

/**
 * Class [FTP]
 * 抽象类子类
 *
 * @package  DesignPattern\Structural\Bridge
 * @author   wanglong <longgwang@tencent.com>
 */
class FTP extends AbstractProtocol
{
    /**
     * transfer
     * 传输文件
     * @return mixed
     * Author:kinddylee@gmail.com
     */
    public function transfer()
    {
        echo "使用FTP协议传输:";
        $this->content->getType();
        $this->content->getSize();
    }

}