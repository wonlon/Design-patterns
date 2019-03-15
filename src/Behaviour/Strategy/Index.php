<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-25
 * Time: 14:46
 */
require '../../../../vendor/autoload.php';

$junyunSort = new  \DesignPattern\Behaviour\JunyunSort();

$xianhouSort = new \DesignPattern\Behaviour\XianhouSort();

$playlistArr = [
    '1'=>10,
    '2'=>2,
    '3'=>14,
];

$context1 = new \DesignPattern\Behaviour\Strategy\Context($junyunSort);
$context1->doSort($playlistArr);

$context2 = new \DesignPattern\Behaviour\Strategy\Context($xianhouSort);
$context2->doSort($playlistArr);