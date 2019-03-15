<?php
/**
 * 请完善PHP文件备注
 * PHP VERSION 7
 *
 * @category VNNOX-PHP
 * @package  NovaStar\Vnnox
 * @author   李磊磊 <kinddylee@gmail.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/
 * @time     2018/10/16 上午11:18
 */

require __DIR__ . '/../../../../vendor/autoload.php';

$os = new \DesignPattern\Behaviour\Visitor\ObjectStruct();
$os->add(new \DesignPattern\Behaviour\Visitor\VMan());
$os->add(new \DesignPattern\Behaviour\Visitor\VWoman());

$ss = new \DesignPattern\Behaviour\Visitor\Success();
$os->display($ss);

$fs = new \DesignPattern\Behaviour\Visitor\Failure();
$os->display($fs);

$ats = new \DesignPattern\Behaviour\Visitor\Amativeness();
$os->display($ats);




