<?php
/**
 * Created by PhpStorm.
 * User: wanglong
 * Date: 2018/6/7
 * Time: 下午5:13
 */

namespace DesignPattern\Structural\Bridge;

/**
 * Class [AbstractProtocol]
 * 1.抽象角色类
 *
 * @package  DesignPattern\Structural\Bridge
 * @author   wanglong <longgwang@tencent.com>
 */
abstract class AbstractProtocol
{
    /**
     * @var Content
     */
    protected $content;

    /**
     * AbstractProtocol constructor.
     * @param Content $content
     */
    public function __construct(Content $content)
    {
        $this->content = $content;
    }

    /**
     * transfer
     * 传输文件
     * @return mixed
     * Author:kinddylee@gmail.com
     */
    abstract public function transfer();


}