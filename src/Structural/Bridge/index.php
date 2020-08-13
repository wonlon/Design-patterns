<?php
/**
 * Created by PhpStorm.
 * User: wanglong
 * Date: 2018/6/7
 * Time: 下午5:22
 */
require __DIR__ . '/../../../vendor/autoload.php';

$mp3 = new \DesignPattern\Structural\Bridge\Mp3Content();

$ftp = new \DesignPattern\Structural\Bridge\FTP($mp3);

$ftp->transfer();


echo PHP_EOL;

$json = new \DesignPattern\Structural\Bridge\JsonStream();
$ftp2 = new \DesignPattern\Structural\Bridge\FTP($json);

$ftp2->transfer();