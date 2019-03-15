<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-22
 * Time: 16:35
 */
require '../../../../vendor/autoload.php';

//获取子清单的时长和子清单的id
$subPlaylist = new \DesignPattern\Structural\Facade\SubPlaylist();
$subDurationTime = $subPlaylist->getSubPlaylistDurationTime();
$subPlid = $subPlaylist->getSubPlaylistId();

//获取父清单的时长和父清单的持续时长
$fatherPlaylist = new \DesignPattern\Structural\Facade\FatherPlaylist();
$fatherItemInfo = $fatherPlaylist->getFatherItemCount($subPlid);
$fatherTime = $fatherPlaylist->getFatherPlaylistDurationTime($subDurationTime);

//对父清单进行排序
$sortAlgorithm = new  \DesignPattern\Structural\Facade\SortAlgorithm();
$sortAlgorithm->sortPlaylist($fatherItemInfo, $fatherTime);

echo "=================================================================================".PHP_EOL;

echo "使用外观模式对子系统进行封装".PHP_EOL;
$sortFacade = new  \DesignPattern\Structural\Facade\SortFacade();
echo $sortFacade->sortPlaylist();
