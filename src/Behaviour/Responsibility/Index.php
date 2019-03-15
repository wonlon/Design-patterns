<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-25
 * Time: 14:46
 */
require __DIR__ . '/../../../vendor/autoload.php';

$projectManagerLeader = new \DesignPattern\Behaviour\Responsibility\ProjectManagerLeader();
$productManagerLeader = new \DesignPattern\Behaviour\Responsibility\ProductManagerLeader();
$departmentManagerLeader = new \DesignPattern\Behaviour\Responsibility\DepartmentManagerLeader();

/**
 * 建议：联调不要中断，每个都执行到，比如同时向某一个人的qq、微信同时推送消息
 * */
$projectManagerLeader->setNextLeader($productManagerLeader)->setNextLeader($departmentManagerLeader);
$projectManagerLeader->approval(2);