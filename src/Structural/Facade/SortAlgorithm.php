<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-22
 * Time: 9:15
 */

namespace DesignPattern\Structural\Facade;


class SortAlgorithm
{
    /**
     * 对父清单进行排序
     * @param $durationTime
     * @param $itemInfo
     * @return string
     */
    public function sortPlaylist( $durationTime, $itemInfo)
    {
        echo  "对父清单进行排序".PHP_EOL;
        return 'sort OK';
    }
}