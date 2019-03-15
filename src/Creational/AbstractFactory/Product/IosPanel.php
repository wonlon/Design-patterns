<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-18
 * Time: 12:57
 */

namespace DesignPattern\Creational\AbstactFactory\Product;


class IosPanel implements PanelInterface
{
    public function big() {
 // TODO: Implement big() method.
        echo  "Ios Panel big". PHP_EOL;
    }

    public function small()
    {
        // TODO: Implement small() method.
        echo  "Ios Panel small". PHP_EOL;
    }
}