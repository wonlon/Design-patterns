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

require __DIR__ . '/../../../vendor/autoload.php';


$pcPlayer = new \DesignPattern\Behaviour\Template\PcPlayer();

//$pcPlayer->generate();


var_dump($pcPlayer->getTest());

$pcPlayer->setTest(100);

var_dump($pcPlayer->getTest());

$androidPlayer = new \DesignPattern\Behaviour\Template\AndroidPlayer();

//$androidPlayer->generate();


var_dump($androidPlayer->getTest());


