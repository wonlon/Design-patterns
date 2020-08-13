<?php
/**
 * Created by PhpStorm.
 * Date: 2018/6/21
 * Time: 上午9:57
 */

require __DIR__ . '/../../../vendor/autoload.php';

//
$root = new \DesignPattern\Structural\Composite\WorkGroup('root工作组');
//
////todo 创建工作组
$workGroup1 = new \DesignPattern\Structural\Composite\WorkGroup('工作组1');
$workGroup2 = new \DesignPattern\Structural\Composite\WorkGroup('工作组2');

$workGroup3 = new \DesignPattern\Structural\Composite\WorkGroup('工作组3');

$workGroup4 = new \DesignPattern\Structural\Composite\WorkGroup('工作组4');
//
////todo 创建媒体
$m1 = new \DesignPattern\Structural\Composite\Media('m1.jpg');
$m2 = new \DesignPattern\Structural\Composite\Media('m2.jpg');
$m3 = new \DesignPattern\Structural\Composite\Media('m3.jpg');
$m4 = new \DesignPattern\Structural\Composite\Media('m4.jpg');
$m5 = new \DesignPattern\Structural\Composite\Media('m5.jpg');
$m6 = new \DesignPattern\Structural\Composite\Media('m6.jpg');
//
//
////添加工作组层级
$root->add($workGroup1);
$root->add($workGroup2);

$workGroup1->add($m1);
$workGroup1->add($m2);

$workGroup2->add($m3);
$workGroup2->add($m4);

$workGroup1->add($workGroup3);
$workGroup1->add($workGroup4);

$workGroup3->add($m5);
$workGroup4->add($m6);




showWorkGroup($root, 0);

echo '=========' . PHP_EOL;

showWorkGroup($workGroup2, 0);


$rootWorkgroup = new \DesignPattern\Structural\Composite\WorkGroup("Root");
$workGroup1 = new \DesignPattern\Structural\Composite\WorkGroup("工作组1");
$workGroup2 = new \DesignPattern\Structural\Composite\WorkGroup("工作组2");
$a_mp4 = new \DesignPattern\Structural\Composite\Media("A.mp4");

$rootWorkgroup->add($workGroup1);
$rootWorkgroup->add($workGroup2);
$rootWorkgroup->add($a_mp4);

$workGroup3 = new \DesignPattern\Structural\Composite\WorkGroup("工作组3");
$b_jpg = new \DesignPattern\Structural\Composite\Media("B.jpg");

$workGroup1->add($workGroup3);
$workGroup1->add($b_jpg);

$c_mp3 = new \DesignPattern\Structural\Composite\Media('c.mp3');
$d_mp4 = new \DesignPattern\Structural\Composite\Media('d.mp4');

$workGroup2->add($c_mp3);
$workGroup2->add($d_mp4);

showWorkGroup($workGroup1, 0);


/**
 * showWorkGroup
 * @param $workGroup
 * @param $deep
 * Author:kinddylee@gmail.com
 */
function showWorkGroup($workGroup, $deep) {

    for ($i = 0; $i < $deep; $i++) {
        echo '--';
    }

    /**
     * @var \DesignPattern\Structural\Composite\Component $workGroup
     * 显示本身的名称
     */
    $workGroup->display();

    //获取子节点
    $childArray = $workGroup->getChild();

    //遍历子节点
    foreach ($childArray as $item) {
        if ($item instanceof \DesignPattern\Structural\Composite\Media) {
            for ($i = 0; $i <= $deep; $i++) {
                echo '--';
            }
            $item->display();
        } else {
            showWorkGroup($item, $deep+1);
        }
    }
}