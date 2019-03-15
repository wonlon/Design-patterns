<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-25
 * Time: 14:46
 */
require __DIR__ . '/../../../vendor/autoload.php';

//实例化卖家
$sellerCar = new \DesignPattern\Behaviour\Mediator\SellerCar();
$sellerCar->setColor('白色');
$sellerCar->setPrice(50000);
$sellerCar->setMileage(50000);

//实例化买家

$buyerCar = new \DesignPattern\Behaviour\Mediator\BuyerCar();
$buyerCar->setColor("白色");
$buyerCar->setPrice(47000);
$buyerCar->setMileage(47000);

//对买家和卖家进行配对
$guazi = new \DesignPattern\Behaviour\Mediator\GuaziMediator();
$guazi->setSellerCar($sellerCar);
$guazi->setBuyerCar($buyerCar);
$guazi->match();

