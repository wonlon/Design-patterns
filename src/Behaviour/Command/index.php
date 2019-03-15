<?php
/**
 * 请完善PHP文件备注
 * PHP VERSION 7
 *
 * @category VNNOX-PHP
 * @package  NovaStar\Vnnox
 * @author   wonlon <wonlon@gmail.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/
 * @time     2018/10/16 上午11:18
 */

require __DIR__ . '/../../../vendor/autoload.php';

$stateControl = new \DesignPattern\Behaviour\Command\StateControl();

$stateControl->close();
$stateControl->open();
$stateControl->reboot();


echo '----commander-------' . PHP_EOL;

$stateOpenCommander = new \DesignPattern\Behaviour\Command\StateOpen($stateControl);
$stateOpenCommander->exec();

$stateRebootCommander = new \DesignPattern\Behaviour\Command\StateReboot($stateControl);
$stateRebootCommander->exec();


echo '----invoker-------' . PHP_EOL;

$invoker = new \DesignPattern\Behaviour\Command\Invoker();
$invoker->addCommander($stateOpenCommander);
$invoker->addCommander($stateRebootCommander);
$invoker->addCommander(new \DesignPattern\Behaviour\Command\StateClose($stateControl));
$invoker->exec();





