<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-17
 * Time: 16:35
 */
namespace DesignPattern\Structural\Decorator;

class EditArt extends AbstractArt {

    /**
     * 具体的装饰器角色01
     */
    public function decorator()
    {
        $this->content->decorator();
        echo '小编摘要'.PHP_EOL;
    }
}