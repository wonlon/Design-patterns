<?php
/**
 * 请完善PHP文件备注
 * PHP VERSION 7
 *
 * @category VNNOX-PHP
 * @package  NovaStar\Vnnox
 * @author   wonlon <wonlon@gmail.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/
 * @time     2018/12/4 5:04 PM
 */

namespace DesignPattern\Behaviour\Memento;


/**
 * Class [Memento]
 * 备忘录角色
 *
 * @category VNNOX-PHP
 * @package  DesignPattern\Behaviour\Memento
 * @author   wonlon <wonlon@gmail.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/ (如果类中有相关引用,请修改此联系,如果有多个引用则添加多个`@link`)
 */
class Memento
{
    public $act;
    public $content;

    /**
     * Memento constructor.
     *
     * @param string $act     操作
     * @param string $content 内容
     */
    public function __construct($act,$content)
    {
        $this->act = $act;
        $this->content = $content;
    }
}