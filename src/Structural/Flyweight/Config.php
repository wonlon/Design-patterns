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
     * 设置host
     * @param string $host
     * @return mixed
     */
    public function setHost($host = '');

    /**
     * 设置AccessId
     * @param string $accessId
     * @return mixed
     */
    public function setAccessId($accessId = '');

    /**
     * 设置Secret
     * @param string $secret
     * @return mixed
     */
    public function setSecret($secret = '');

}