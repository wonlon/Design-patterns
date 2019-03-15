<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-18
 * Time: 13:01
 */

namespace DesignPattern\Creational\AbstactFactory\Factory;


use DesignPattern\Creational\AbstactFactory\Product\AndriodButton;
use DesignPattern\Creational\AbstactFactory\Product\AndriodPanel;

class AndriodFactory implements Factory
{
    public function createButton() {
        // TODO: Implement createButton() method.
        return  new AndriodButton();
    }

    public function createPanel()
    {
        // TODO: Implement createPanel() method.
        return  new AndriodPanel();
    }
}