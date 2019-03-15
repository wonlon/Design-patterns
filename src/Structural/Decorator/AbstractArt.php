<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-17
 * Time: 16:35
 */
namespace DesignPattern\Structural\Decorator;

abstract class AbstractArt implements ArtInterface {

    //抽象的装饰器角色
    protected $content;
    public function __construct( ArtInterface $contenet )
    {
        $this->content = $contenet;
    }
}