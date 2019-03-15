<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-18
 * Time: 12:59
 */

namespace DesignPattern\Creational\AbstactFactory\Factory;


use DesignPattern\Creational\AbstactFactory\Product\IosButton;
use DesignPattern\Creational\AbstactFactory\Product\IosPanel;

class IosFactory implements Factory
{
    public function createButton()
    {
        // TODO: Implement createButton() method.
        return  new IosButton();
    }

    public function createPanel()
    {
        // TODO: Implement createPanel() method.
        return new IosPanel();
    }

}