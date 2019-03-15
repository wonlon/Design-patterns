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
 * @time     2018/10/30 5:16 PM
 */

namespace DesignPattern\Behaviour\Command;


/**
 * Class [Command]
 * 1.请描述类的功能
 *
 * 2.请描述类的依赖
 * 3.请描述已知缺陷
 * 4.修改历史:
 *   修改人 + 日期 + 简单说明
 *
 * @category VNNOX-PHP
 * @package  DesignPattern\Behaviour\Command
 * @author   wonlon <wonlon@gmail.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/ (如果类中有相关引用,请修改此联系,如果有多个引用则添加多个`@link`)
 */
abstract class Command
{
    /**
     * StateControl
     *
     * @var StateControl
     */
    protected $stateControl;

    /**
     * Command constructor.
     *
     * @param StateControl $stateControl 接受者引用
     */
    public function __construct(StateControl $stateControl)
    {
        $this->stateControl = $stateControl;
    }

    /**
     * Getter
     *
     * @return StateControl
     */
    public function getStateControl(): StateControl
    {
        return $this->stateControl;
    }

    /**
     * Setter
     *
     * @param StateControl $stateControl 设定引用
     *
     * @return void
     */
    public function setStateControl(StateControl $stateControl)
    {
        $this->stateControl = $stateControl;
    }

    /**
     * Function:exec
     * 执行命令的抽象方法
     *
     * @return mixed
     */
    abstract public function exec();
}