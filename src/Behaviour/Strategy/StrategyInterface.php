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
 * @time     2018-11-23 15:48
 */

namespace DesignPattern\Behaviour\Strategy;


interface StrategyInterface
{
    /**
     * Function:sort
     * 排序
     *
     * @param array $playlistInfo 清单数据
     *
     * @return mixed
     */
    public function sort(array $playlistInfo);
}