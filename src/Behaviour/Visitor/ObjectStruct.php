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
 * @time     2018-12-11 15:58
 */

namespace DesignPattern\Behaviour\Visitor;


/**
 * Class [ObjectStruct]
 * 对象管理器
 *
 * @category VNNOX-PHP
 * @package  DesignPattern\Behaviour\Visitor
 * @author   wanglong <wanglong@novastar.tech>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/ (如果类中有相关引用,请修改此联系,如果有多个引用则添加多个`@link`)
 */
class ObjectStruct
{
    private $elements = [];

    /**
     * Function:add
     * 增加对象元素
     *
     * @param Person $element
     *
     * @return void
     */
    public function add(Person $element)
    {
        array_push($this->elements,$element);
    }

    /**
     * Function:remove
     * 移除对象元素
     *
     * @param Person $element
     *
     * @return void
     */
    public function remove(Person $element)
    {
        foreach ($this->elements as $k => $v) {
            if ($v == $element) {
                unset($this->elements[$k]);
            }
        }
    }

    /**
     * Function:display
     * 显示对象的状态
     *
     * @param State $visitor
     *
     * @return void
     */
    public function display(State $visitor)
    {
        foreach ($this->elements as $v) {
            $v->Accept($visitor);
        }
    }
}