<?php
/**
 * 请完善PHP文件备注
 * PHP VERSION 7
 *
 * @category VNNOX-PHP
 * @package  NovaStar\Vnnox
 * @author   wanglong <wanglong@novastar.tech>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/
 * @time     2018-12-11 15:34
 */

namespace DesignPattern\Behaviour\Visitor;


/**
 * Class [State]
 * 抽象元素-状态
 *
 * @category VNNOX-PHP
 * @package  DesignPattern\Behaviour\Visitor
 * @author   wanglong <wanglong@novastar.tech>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/ (如果类中有相关引用,请修改此联系,如果有多个引用则添加多个`@link`)
 */
abstract  class State
{
    /**
     * 状态名称
     *
     * @var string
     */
    protected $_state_name;

    /**
     * Function:getManAction
     * 获取男人的状态
     *
     * @param VMan $elementM
     *
     * @return mixed
     */
    public abstract function getManAction(VMan $elementM);

    /**
     * Function:getWomanAction
     * 获取男人的状态
     *
     * @param VWoman $elementW
     *
     * @return mixed
     */
    public abstract function getWomanAction(VWoman $elementW);

}