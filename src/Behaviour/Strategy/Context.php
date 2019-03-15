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
 * @time     2018-11-23 15:59
 */

namespace DesignPattern\Behaviour\Strategy;


/**
 * Class [Context]
 * 1.请描述类的功能
 * 2.请描述类的依赖
 * 3.请描述已知缺陷
 * 4.修改历史:
 *   修改人 + 日期 + 简单说明
 *
 * @category VNNOX-PHP
 * @package  DesignPattern\Behaviour\Strategy
 * @author   Administrator <wanglong@novastar.tech>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/ (如果类中有相关引用,请修改此联系,如果有多个引用则添加多个`@link`)
 */
class Context
{
    /**
     * @var StrategyInterface
     */
    private $_sort;

    /**
     * Context constructor.
     *
     * @param StrategyInterface $_sort
     */
    public function __construct(StrategyInterface $_sort)
    {
        $this->_sort = $_sort;
    }

    /**
     * Function:jiami
     * Context中对客户端友好的接口
     *
     * @param string $msg 加密源
     *
     * @return void
     */
    public function doSort(array $data)
    {
        echo $this->_sort->sort($data).PHP_EOL;
    }

}