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
 * @time     2018-11-23 15:51
 */

namespace DesignPattern\Behaviour;
use DesignPattern\Behaviour\Strategy\StrategyInterface;


/**
 * Class [uniform]
 * 1.请描述类的功能
 * 2.请描述类的依赖
 * 3.请描述已知缺陷
 * 4.修改历史:
 *   修改人 + 日期 + 简单说明
 *
 * @category VNNOX-PHP
 * @package  DesignPattern\Behaviour
 * @author   Administrator <wanglong@novastar.tech>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/ (如果类中有相关引用,请修改此联系,如果有多个引用则添加多个`@link`)
 */
class XianhouSort implements StrategyInterface
{
    /**
     * Function:sort
     * 实现先后排序
     *
     * @param array $playlistInfo 数据
     *
     * @return void
     */
    public function sort(array $playlistInfo)
    {
        echo "先后排序清单：".json_encode($playlistInfo).PHP_EOL;
    }
}