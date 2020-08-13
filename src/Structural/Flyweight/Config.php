<?php
/**
 * remark
 * User: wanglong
 * Date: 2018-5-24
 * Time: 14:39
 */

namespace DesignPattern\Structural\Flyweight;


interface Config {

    /**
     * Function:changeHost
     * 改变外蕴状态
     *
     * @param String $host
     *
     * @return mixed
     */
    public function changeHost($host);

}