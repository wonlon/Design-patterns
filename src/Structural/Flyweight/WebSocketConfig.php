<?php
/**
 * remark
 * User: 郭梦婷
 * Date: 2018-5-24
 * Time: 14:43
 */

namespace DesignPattern\Structural\Flyweight;


class WebSocketConfig implements Config {

    /**
     * @var string 内蕴状态
     */
    private $port;
    /**
     * @var string 外蕴状态
     */
    private $host;


    public function setHost($host = '')
    {
        // TODO: Implement setHost() method.
        $this->host = $host;
    }

    public function setPort($port)
    {
        $this->port = $port;
    }

    public function changeHost($host){
        $this->host = $host;
        return $this;
    }

}