<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-21
 * Time: 20:38
 */

namespace DesignPattern\Structural\Facade;


class FatherPlaylist
{
    /**
     * 获取父清单的时长
     * @param $subTime
     * @return int
     */
    public function getFatherPlaylistDurationTime( $subTime )
    {
        echo '获取父清单的持续时长'.PHP_EOL;
        return rand(0,100000);
    }

    /**
     * 获取父清单的媒体项个数
     * @param $subId
     * @return array
     */
    public function getFatherItemCount( $subId)
    {
        echo '获取父清单媒体项的个数'.PHP_EOL;
        return ['name'=>'1.jpg','count'=>10];
    }
}