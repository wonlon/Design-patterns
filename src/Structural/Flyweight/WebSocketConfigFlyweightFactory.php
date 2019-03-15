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
     * 获取享元对象
     * @param string $host
     * @param string $accessId
     * @param string $secret
     * @return WebSocketConfig|mixed
     */
    public function getInstance($host = '', $accessId = '', $secret = '')
    {
        $key = md5($host.$accessId.$secret);
        if (!isset($this->objectPool[$key])) {
            $webSocketConfig = new WebSocketConfig();
            $webSocketConfig->setHost($host);
            $webSocketConfig->setAccessId($accessId);
            $webSocketConfig->setSecret($secret);
            $webSocketConfig->setPort();
            $this->objectPool[$key] = $webSocketConfig;
            return $webSocketConfig;
        } else {
            return $this->objectPool[$host.$accessId.$secret];
        }
    }
}