<?php
/**
 * 请完善PHP文件备注
 * PHP VERSION 7
 *
 * @category VNNOX-PHP
 * @package  NovaStar\Vnnox
 * @author   Administrator <wanglong@novastar.tech>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/
 * @time     2018-7-26 11:15
 */

namespace DesignPattern\Behaviour\State;


/**
 * Class [DisplaySolution]
 * 1.请描述类的功能
 * 2.请描述类的依赖
 * 3.请描述已知缺陷
 * 4.修改历史:
 *   修改人 + 日期 + 简单说明
 *
 * @category VNNOX-PHP
 * @package  DesignPattern\Behaviour\State
 * @author   Administrator <wanglong@novastar.tech>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/ (如果类中有相关引用,请修改此联系,如果有多个引用则添加多个`@link`)
 */
class DisplaySolutionV2 implements IState
{
    /**
     * Function:generateProtocol
     * 1.请描述方法的功能
     * 2.其他信息
     *
     * @param Player $player 播放器对象
     *
     * @return bool|null
     */
    function generateProtocol(Player $player)
    {
        $result = null;

        if ($player->getVersion() == 'v2') {
            echo '生成V2版本的显示屏解决方案' . PHP_EOL;
            $result = true;
        }

        return $result;
    }
}