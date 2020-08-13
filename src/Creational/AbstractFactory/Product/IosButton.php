<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-18
 * Time: 12:56
 */

namespace DesignPattern\Creational\AbstractFactory\Product;


class IosButton implements ButtonInterface
{
    public function __construct()
    {
        $this->down();
        $this->up();
    }

    public function down()
    {
        // TODO: Implement down() method.
        echo "IOS down".PHP_EOL;
    }

    public function up()
    {
        // TODO: Implement up() method.
        echo "IOS up".PHP_EOL;
    }

}