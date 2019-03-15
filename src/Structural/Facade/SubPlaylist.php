<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-21
 * Time: 20:36
 */

namespace DesignPattern\Structural\Facade;


class SubPlaylist
{
    /**
     * 获取子清单时长
     * @return int
     */
    public function getSubPlaylistDurationTime()
    {
        return rand(0,10000);
    }

    /**
     * 获取子清单的id
     * @return int
     */
    public function getSubPlaylistId()
    {
        return rand(0,10);
    }
}