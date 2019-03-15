<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-18
 * Time: 12:57
 */

namespace DesignPattern\Creational\AbstactFactory\Product;


class AndriodButton implements ButtonInterface
{
    public function down()
    {
        // TODO: Implement down() method.
        echo "Andriod down".PHP_EOL;
    }

    public function up()
    {
        // TODO: Implement up() method.
        echo "Andriod up".PHP_EOL;
    }
}