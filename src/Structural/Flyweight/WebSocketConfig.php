<?php
/**
 * remark
 * User: 郭梦婷
 * Date: 2018-5-24
 * Time: 14:43
 */

namespace DesignPattern\Structural\Flyweight;


class WebSocketConfig implements Config {

    private $port = 8010;
    private $host;
    private $accessId;
    private $secret;
    public function setHost($host = '')
    {
        // TODO: Implement setHost() method.
        $this->host = $host;
    }

    public function setAccessId($accessId = '')
    {
        // TODO: Implement setAccessId() method.
        $this->accessId = $accessId;
    }

    public function setSecret($secret = '')
    {
        // TODO: Implement setSecret() method.
        $this->secret = $secret;
    }

    public function setPort()
    {
        return $this->port;
    }

}