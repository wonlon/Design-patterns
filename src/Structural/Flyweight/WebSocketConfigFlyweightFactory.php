<?php
/**
 * remark
 * User: wanglong
 * Date: 2018-5-25
 * Time: 09:09
 */

namespace DesignPattern\Structural\Flyweight;


class WebSocketConfigFlyweightFactory {

    /**
     * @var array
     * 共享享元的对象池
     */
    private $objectPool = [];

    /**
     * Function:getInstance
     * 获取享元对象
     *
     * @param string $host
     * @param string $port
     *
     *
     * @return WebSocketConfig|mixed
     */
    public function getInstance($host = '', $port = '')
    {
        $key = $host.$port;
        if (!isset($this->objectPool[$key])) {
            $webSocketConfig = new WebSocketConfig();
            $webSocketConfig->setHost($host);
            $webSocketConfig->setPort($port);
            $this->objectPool[$key] = $webSocketConfig;
            return $webSocketConfig;
        } else {
            return $this->objectPool[$host.$port];
        }
    }
}