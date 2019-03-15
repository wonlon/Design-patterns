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
 * @time     2018-7-27 18:33
 */

namespace DesignPattern\Behaviour\Mediator;


/**
 * Class [BuyerCar]
 * 1.请描述类的功能
 * 2.请描述类的依赖
 * 3.请描述已知缺陷
 * 4.修改历史:
 *   修改人 + 日期 + 简单说明
 *
 * @category VNNOX-PHP
 * @package  DesignPattern\Behaviour\Mediator
 * @author   Administrator <wanglong@novastar.tech>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/ (如果类中有相关引用,请修改此联系,如果有多个引用则添加多个`@link`)
 */
class BuyerCar extends AbstractCar
{
    /**
     * Function:show
     * 显示买家想要的信息
     *
     * @return mixed
     */
    public function show()
    {
        // TODO: Implement show() method.
        echo  "我是买家，我想要，价格:".$this->getPrice().";颜色：".$this->getColor().";公里数：".$this->getMileage().';的二手车'.PHP_EOL;
    }

}