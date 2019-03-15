<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-25
 * Time: 14:46
 */
require __DIR__ . '/../../../vendor/autoload.php';

//实例化播放器
$player = new \DesignPattern\Behaviour\State\Player();
$player->setId(223);
$player->setVersion('v3');

//实例化显示屏解决方案的状态
$displaySolutionStateV1 = new \DesignPattern\Behaviour\State\DisplaySolutionV1();
$displaySolutionStateV2 = new \DesignPattern\Behaviour\State\DisplaySolutionV2();
$displaySolutionStateV3 = new \DesignPattern\Behaviour\State\DisplaySolutionV3();


//实例化上下文对象，设定不同的状态
$displaySolutionContext = new \DesignPattern\Behaviour\State\DisplaySolutionContext();
$displaySolutionContext->addState($displaySolutionStateV1);
$displaySolutionContext->addState($displaySolutionStateV2);
$displaySolutionContext->addState($displaySolutionStateV3);

$displaySolutionContext->createDisplaySolution($player);


