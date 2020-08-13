<?php
/**
 * Created by PhpStorm.
 * User: wanglong
 * Date: 2018-5-19
 * Time: 16:45
 */
require __DIR__ . '/../../../vendor/autoload.php';

echo "===================浅拷贝==============================".PHP_EOL;
$dog = new \DesignPattern\Creational\Prototype\Dog("小白");
$shallow = $dog->shallowCopy();
echo "dog:";
var_dump($dog);
echo "shallow:";
var_dump($shallow);

echo "两个对象的是否相等".PHP_EOL;
var_dump($dog === $shallow );

echo "浅拷贝原始结果：".$dog->getName().PHP_EOL;
echo "浅拷贝结果：".$shallow->getName().PHP_EOL;

echo "======================修改名字=========================".PHP_EOL;
$dog->setName("小黑");
$shallow->setName("小黑2");

echo "修改名字后浅拷贝原始结果：".$dog->getName().PHP_EOL;
echo "修改名字后浅拷贝结果：".$shallow->getName().PHP_EOL;


echo "===================深拷贝==============================".PHP_EOL;
$dog1 = new \DesignPattern\Creational\Prototype\Dog('小白');
$deep = $dog1->deepCopy();
echo "dog1:";
var_dump($dog1);
echo "deep:";
var_dump($deep);
echo "两个对象的是否相等".PHP_EOL;
var_dump($dog1 === $deep );
echo "深拷贝原始结果：".$dog1->getName().PHP_EOL;
echo "深拷贝结果：".$deep->getName().PHP_EOL;

echo "======================修改名字=========================".PHP_EOL;
$dog1->setName("小黑");
$deep->setName("小黑2");

echo "修改名字后深拷贝原始结果：".$dog1->getName().PHP_EOL;
echo "修改名字后深拷贝结果：".$deep->getName().PHP_EOL;