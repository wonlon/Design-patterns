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
 * @time     2018/10/30 5:11 PM
 */

namespace DesignPattern\Behaviour\Command;


/**
 * Class [StateControl]
 * 1.请描述类的功能
 * 2.请描述类的依赖
 * 4.修改历史:
 *   修改人 + 日期 + 简单说明
 *
 * @category VNNOX-PHP
 * @package  DesignPattern\Behaviour\Command
 * @author   wonlon <wonlon@gmail.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/ (如果类中有相关引用,请修改此联系,如果有多个引用则添加多个`@link`)
 */
class StateControl
{
    /**
     * Function:open
     * 开屏
     *
     * @return void
     */
    public function open()
    {
        echo '开屏' . PHP_EOL;
    }

    /**
     * Function:close
     * 关屏
     *
     * @return void
     */
    public function close()
    {
        echo '关屏' . PHP_EOL;
    }

    /**
     * Function:reboot
     * 重启
     *
     * @return void
     */
    public function reboot()
    {
        echo '重启' . PHP_EOL;
    }
}