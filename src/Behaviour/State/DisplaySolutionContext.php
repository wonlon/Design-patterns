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
 * @time     2018-7-26 18:32
 */

namespace DesignPattern\Behaviour\State;


/**
 * Class [DisplaySolutionContext]
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
class DisplaySolutionContext
{
    /**
     * 对象状态池
     *
     * @var array
     */
    private $_statePool = [];

    /**
     * Function:addState
     * 1.请描述方法的功能
     *
     * @param IState $state 状态类对象
     *
     * @return void
     */
    public function addState(IState $state)
    {
        //$classNameMd5 = md5(get_class($state));
        //$this->_statePool[$classNameMd5] = $state;
        $this->_statePool[] = $state;
    }

    /**
     * Function:createDisplaySolution
     * 1.请描述方法的功能
     * 2.其他信息
     *
     * @param Player $player 播放器对象
     *
     * @return void
     */
    public function createDisplaySolution(Player $player)
    {
        foreach ($this->_statePool as $item) {
            /**
             * 状态对象
             *
             * @var IState $item
             */
            $result = $item->generateProtocol($player);

            //如果匹配到某一版本的显示屏解决方案状态对象，则停止循环
            if ($result === true) {
                break;
            }
        }
    }
}