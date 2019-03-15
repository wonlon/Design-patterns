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
 * @time     2018/12/4 4:55 PM
 */

namespace DesignPattern\Behaviour\Memento;


/**
 * Class [Media]
 * 备忘录原角色
 *
 * @category VNNOX-PHP
 * @package  DesignPattern\Behaviour\Memento
 * @author   wonlon <wonlon@gmail.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/ (如果类中有相关引用,请修改此联系,如果有多个引用则添加多个`@link`)
 */
class PlaylistInfo
{
    public $act;
    public $content;

    /**
     * Function:saveState
     * 保存状态
     *
     * @param string    $key       key
     * @param CareTaker $caretaker 备忘录管理角色
     *
     * @return void
     */
    public function saveState($key, CareTaker $caretaker)
    {
        return $caretaker->add($key, new Memento($this->act, $this->content));
    }

    /**
     * Function:recoveryState
     * 恢复状态
     *
     * @param Memento $memento 备忘录角色
     *
     * @return void
     */
    public function recoveryState(Memento $memento)
    {
        $this->act = $memento->act;
        $this->content = $memento->content;
    }

    /**
     * Function:modify
     * 修改状态
     *
     * @param string $act     操作
     * @param string $content 内容
     *
     * @return void
     */
    public function modify($act,$content)
    {
        $this->act = $act;
        $this->content = $content;
    }

    /**
     * Function:show
     * 显示当前状态
     *
     * @return void
     */
    public function show()
    {
        echo "操作：".$this->act.PHP_EOL;
        echo "内容:".$this->content.PHP_EOL;
    }
}