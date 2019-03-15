<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-25
 * Time: 14:46
 */
require '../../../../vendor/autoload.php';

//三个播放器观察者
$player1 = new \DesignPattern\Behaviour\Observer\PlayerObserver(1);
$player2 = new \DesignPattern\Behaviour\Observer\PlayerObserver(2);
$player3 = new \DesignPattern\Behaviour\Observer\PlayerObserver(3);

//媒体被观察者
$media = new \DesignPattern\Behaviour\Observer\MediaObservable();
$media->addObserver($player1);
$media->addObserver($player2);
$media->update(1);

//清单被观察者
$playlist = new \DesignPattern\Behaviour\Observer\PlaylistObservable();
$playlist->addObserver($player1);
$playlist->addObserver($player3);
$playlist->update(20);