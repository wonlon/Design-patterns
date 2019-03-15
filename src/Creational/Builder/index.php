<?php
/**
 * Created by PhpStorm.
 * User: "wanglong"
 * Date: 2018-5-21
 * Time: 17:10
 */
require '../../../../vendor/autoload.php';

$director = new \DesignPattern\Creational\Builder\Director();
echo "蓝鸟的组成：<hr/>";

$blue_bird=$director->Construct(new \DesignPattern\Creational\Builder\Build\BlueBird());
$blue_bird->Show();

echo "<br/>Rose鸟的组成：<hr/>";

$blue_bird=$director->Construct(new \DesignPattern\Creational\Builder\Build\RoseBird());
$blue_bird->Show();

