<?php
/**
 * Created by PhpStorm.
 * Date: 2018/6/5
 * Time: 下午4:48
 */
require __DIR__ . '/../../../vendor/autoload.php';

$file = new \DesignPattern\Structural\Proxy\File();
$file->saveData('abcdefg');
$file->findData(2);
$file->deleteData(2);

echo "=======================".PHP_EOL;

$fileProxy = new \DesignPattern\Structural\Proxy\FileProxy();
$fileProxy->saveData('defg');
$fileProxy->findData(4);
$fileProxy->deleteData(4);
