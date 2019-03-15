<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-7-3
 * Time: 14:31
 */
require '../../../../vendor/autoload.php';
$p1 = new \DesignPattern\Structural\Composite\Playlist("p1");
$p1_1 = new \DesignPattern\Structural\Composite\Playlist("p1_1");

$p1_1_a_jpg = new \DesignPattern\Structural\Composite\Media("p1_1_a.jpg");
$p1_b_mp4 = new \DesignPattern\Structural\Composite\Media("p1_b.mp4");
$p1_c_avi = new \DesignPattern\Structural\Composite\Media("p1_c.avi");

$p1_1->add($p1_1_a_jpg);
$p1->add($p1_1);
$p1->add($p1_b_mp4);
$p1->add($p1_c_avi);

$p1->show();