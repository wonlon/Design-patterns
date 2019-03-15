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
 * @time     2018-7-27 18:23
 */

namespace DesignPattern\Behaviour\Mediator;


/**
 * Class [AbstractPeople]
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
abstract class AbstractCar
{

    /**
     * 价格
     *
     * @var float
     */
    private $_price = 0.0;

    /**
     * 颜色
     *
     * @var string
     */
    private $_color = '';

    /**
     * 公里数
     *
     * @var float
     */
    private $_mileage = 0.0;

    /**
     * Getter
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->_price;
    }

    /**
     * Setter
     *
     * @param float $price 价格
     *
     * @return void
     */
    public function setPrice($price)
    {
        $this->_price = $price;
    }

    /**
     * Getter
     *
     * @return string
     */
    public function getColor()
    {
        return $this->_color;
    }

    /**
     * Setter
     *
     * @param string $color 颜色
     *
     * @return void
     */
    public function setColor($color)
    {
        $this->_color = $color;
    }

    /**
     * Getter
     *
     * @return float
     */
    public function getMileage()
    {
        return $this->_mileage;
    }

    /**
     * Setter
     *
     * @param float $mileage 公里数
     *
     * @return void
     */
    public function setMileage($mileage)
    {
        $this->_mileage = $mileage;
    }


    /**
     * Function:show
     * 显示车辆信息
     *
     * @return mixed
     */
    public abstract function show();
}