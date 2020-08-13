<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-18
 * Time: 12:59
 */

namespace DesignPattern\Creational\AbstractFactory\Product;


class AndriodPanel implements PanelInterface
{
    public function big() {
        // TODO: Implement big() method.
        echo  "Andriod Panel big". PHP_EOL;
    }

    public function small()
    {
        // TODO: Implement small() method.
        echo  "Andriod Panel small". PHP_EOL;
    }
}