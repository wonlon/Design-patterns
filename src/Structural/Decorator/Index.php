<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-17
 * Time: 16:35
 */
require __DIR__ . '/../../../vendor/autoload.php';

$Art = new  \DesignPattern\Structural\Decorator\Art();

//小编审核，增加备注等信息
$EditArt = new  \DesignPattern\Structural\Decorator\EditArt($Art);
//增加SEO
$SeoArt = new  \DesignPattern\Structural\Decorator\SeoArt($EditArt);

$SeoArt->decorator();

echo "==================================================================================".PHP_EOL;
//增加SEO
$SeoArt = new  \DesignPattern\Structural\Decorator\SeoArt($Art);
//小编审核，增加备注等信息
$EditArt = new  \DesignPattern\Structural\Decorator\EditArt($SeoArt);

$EditArt->decorator();

