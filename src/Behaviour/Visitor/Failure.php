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
 * @time     2018-12-11 15:52
 */

namespace DesignPattern\Behaviour\Visitor;


/**
 * Class [Failure]
 * 具体的元素
 *
 * @category VNNOX-PHP
 * @package  DesignPattern\Behaviour\Visitor
 * @author   wanglong <wanglong@novastar.tech>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/ (如果类中有相关引用,请修改此联系,如果有多个引用则添加多个`@link`)
 */
class Failure extends State
{
    public function __construct()
    {
        $this->_state_name = '失败';
    }

    /**
     * Function:getManAction
     * 获取男人的状态
     *
     * @param VMan $elementM
     *
     * @return mixed
     */
    public function getManAction(VMan $elementM)
    {
        echo "{$elementM->type_name}:{$this->_state_name}时，闷头喝酒，谁也不用劝".PHP_EOL;
    }

    /**
     * Function:getWomanAction
     * 获取男人的状态
     *
     * @param VWoman $elementW
     *
     * @return mixed
     */
    public function getWomanAction(VWoman $elementW)
    {
        echo "{$elementW->type_name} :{$this->_state_name}时，眼泪汪汪，谁也劝不了".PHP_EOL;
    }

}