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
 * @time     2018/10/30 5:27 PM
 */

namespace DesignPattern\Behaviour\Command;


/**
 * Class [Invoker]
 * 1.请描述类的功能
 * 2.请描述类的依赖
 * 3.请描述已知缺陷
 *   修改人 + 日期 + 简单说明
 *
 * @category VNNOX-PHP
 * @package  DesignPattern\Behaviour\Command
 * @author   wonlon <wonlon@gmail.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/ (如果类中有相关引用,请修改此联系,如果有多个引用则添加多个`@link`)
 */
class Invoker
{
    /**
     * Command容器
     *
     * @var array
     */
    private $_commanders = [];

    /**
     * Function:addCommander
     * 添加命令
     *
     * @param Command $command 实例对象
     *
     * @return void
     */
    public function addCommander(Command $command)
    {
        $this->_commanders[] = $command;
    }

    /**
     * Function:removeCommander
     * 删除命令
     *
     * @return void
     */
    public function removeCommander()
    {

    }

    /**
     * Function:exec
     * 执行命令
     *
     * @return void
     */
    public function exec()
    {
        foreach ($this->_commanders as $commander) {
            $commander->exec();
        }
    }

    /**
     * Function:exec2
     * 其他命令执行封装
     *
     * @return void
     */
    public function exec2()
    {

    }
}