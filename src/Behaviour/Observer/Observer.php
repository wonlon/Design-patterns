<?php
/**
 * 请完善PHP文件备注
 * PHP VERSION 7
 *
 * @category VNNOX-PHP
 * @package  NovaStar\Vnnox
 * @author   Administrator <wanglong@novastar.tech>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/
 * @time     2018-10-23 10:15
 */

namespace DesignPattern\Behaviour\Observer;
/**
 * 抽象的观察角色
 *
 * Interface Observer
 *
 * @package DesignPattern\Behaviour\Observer
 */
interface Observer
{
    /**
     * Function:generate
     * 观察者下发节目
     *
     * @param $type
     * @param $id
     *
     * @return mixed
     */
    public function generate($type, $id);
}