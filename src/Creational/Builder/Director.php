<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-21
 * Time: 19:37
 */

namespace DesignPattern\Creational\Builder;

/**指挥者
 * Class Director
 */
class Director
{
    /**
     *
     * @param $_builder 建造者
     * @return mixed 产品类：鸟
     */
    public function Construct($_builder)
    {
        $_builder->BuildHead();
        $_builder->BuildWing();
        $_builder->BuildFoot();
        return $_builder->GetBird();
    }
}