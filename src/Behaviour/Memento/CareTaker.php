<?php
/**
 * 请完善PHP文件备注
 * PHP VERSION 7
 *
 * @category VNNOX-PHP
 * @package  NovaStar\Vnnox
 * @author   李磊磊 <kinddylee@gmail.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/
 * @time     2018/12/4 5:13 PM
 */

namespace DesignPattern\Behaviour\Memento;


/**
 * Class [CareTaker]
 * 备忘录管理器
 *
 * @category VNNOX-PHP
 * @package  DesignPattern\Behaviour\Memento
 * @author   李磊磊 <kinddylee@gmail.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/ (如果类中有相关引用,请修改此联系,如果有多个引用则添加多个`@link`)
 */
class CareTaker
{
    public $data = array();

    /**
     * Function:add
     * 增加备忘录
     *
     * @param Memento $memento 备忘录角色
     *
     * @return void
     */
    public function add($key, Memento $memento)
    {
        $this->data[$key] = $memento;
    }

    /**
     * Function:getAll
     * 获取全部备忘录对象
     *
     * @return array
     */
    public function getAll()
    {
        return $this->data;
    }
    /**
     * Function:getLast
     * 获取最后一个备忘录
     *
     * @return mixed|void
     */
    public function getLast()
    {
        $len = count($this->data);
        if ($len < 1) {
            return;
        }
        return $this->data[$len - 2];
    }

    /**
     * Function:jumpStep
     * 跳转到第几部
     *
     * @param int $setp 第几步
     *
     * @return mixed
     */
    public function jumpStep($key)
    {
        return $this->data[$key];
    }
}