<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-25
 * Time: 14:46
 */
require __DIR__ . '/../../../vendor/autoload.php';

$playlistInfo = new \DesignPattern\Behaviour\Memento\PlaylistInfo();
$careTaker = new \DesignPattern\Behaviour\Memento\CareTaker();
$playlistInfo->modify('插入abc','abc');
$playlistInfo->saveState(1,$careTaker);
$playlistInfo->modify('插入d','abcd');
$playlistInfo->saveState(2,$careTaker);
$playlistInfo->modify('删除c','abd');
$playlistInfo->saveState(3,$careTaker);
$playlistInfo->modify('插入e','abde');
$playlistInfo->saveState(4,$careTaker);


$playlistInfo->recoveryState($careTaker->jumpStep(4));
$playlistInfo->show();
$playlistInfo->recoveryState($careTaker->jumpStep(2));
$playlistInfo->show();


