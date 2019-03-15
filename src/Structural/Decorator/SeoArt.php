<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-17
 * Time: 16:35
 */
namespace DesignPattern\Structural\Decorator;

class SeoArt extends AbstractArt {

    /**
     * 具体的装饰器角色02
     */
    public function decorator()
    {
        $this->content->decorator();
        echo '增加SEO'.PHP_EOL;
    }
}