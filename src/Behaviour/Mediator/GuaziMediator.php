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
 * @time     2018-7-31 9:32
 */

namespace DesignPattern\Behaviour\Mediator;


/**
 * Class [guaziMediator]
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
class GuaziMediator extends AbstractMediator
{
    /**
     * 买车对象
     *
     * @var BuyerCar
     */
    private $_buyerCar;

    /**
     * 卖车对象
     *
     * @var SellerCar
     */
    private $_sellerCar;

    /**
     * Function:setBuyerCar
     * 设置买车对象
     *
     * @param BuyerCar $buyerCar 买车对象
     *
     * @return void
     */
    public function setBuyerCar(BuyerCar $buyerCar)
    {
        $this->_buyerCar = $buyerCar;
    }

    /**
     * Function:setSellerCar
     * 设置卖车对象
     *
     * @param SellerCar $sellerCar 卖车对象
     *
     * @return void
     */
    public function setSellerCar(SellerCar $sellerCar)
    {
        $this->_sellerCar = $sellerCar;
    }

    /**
     * Function:match
     * 进行匹配
     *
     * @return void
     */
    public function match()
    {
        //买家信息
        $buyColor = $this->_buyerCar->getColor();
        $buyPrice = $this->_buyerCar->getPrice();
        $buyMileage = $this->_buyerCar->getMileage();

        $sellerColor = $this->_sellerCar->getColor();
        $sellerPrice = $this->_sellerCar->getPrice();
        $sellerMileage = $this->_sellerCar->getMileage();

        if( $buyColor == $sellerColor && abs($sellerPrice - $buyPrice)<5000
                && abs($buyMileage - $sellerMileage) < 5000){
            echo "买家和卖家匹配成功，有交易的可能";
        } else {
            echo "买家和卖家匹配不成功，交易不可能进行";
        }
    }
}