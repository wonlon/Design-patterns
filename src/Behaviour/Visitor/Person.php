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
 * @time     2018-12-11 15:37
 */

namespace DesignPattern\Behaviour\Visitor;


/**
 * Class [Person]
 * 抽象的观察者
 *
 * @category VNNOX-PHP
 * @package  DesignPattern\Behaviour\Visitor
 * @author   wanglong <wanglong@novastar.tech>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/ (如果类中有相关引用,请修改此联系,如果有多个引用则添加多个`@link`)
 */
abstract class Person
{
    /**
     * 人的类型
     *
     * @var string
     */
    public $type_name;

    /**
     * Function:accept
     * 对不同的状态做处理
     *
     * @param State $visitor
     *
     * @return mixed
     */
    public abstract function accept(State $visitor);
}