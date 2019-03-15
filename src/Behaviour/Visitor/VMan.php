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
 * @time     2018-12-11 15:43
 */

namespace DesignPattern\Behaviour\Visitor;


/**
 * Class [VMan]
 * 具体的访问者
 *
 * @category VNNOX-PHP
 * @package  DesignPattern\Behaviour\Visitor
 * @author   wanglong <wanglong@novastar.tech>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/ (如果类中有相关引用,请修改此联系,如果有多个引用则添加多个`@link`)
 */
class VMan extends Person
{
    public function __construct()
    {
        $this->type_name = '男人';
    }

    /**
     * Function:accept
     * 1.请描述方法的功能
     * 2.其他信息
     *
     * @param State $visitor
     *
     * @return mixed
     */
    public function accept(State $visitor)
    {
        $visitor->getManAction($this);
    }

}