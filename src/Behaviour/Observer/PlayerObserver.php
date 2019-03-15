<?php
/**
 * 请完善PHP文件备注
 * PHP VERSION 7
 *
 * @category VNNOX-PHP
 * @package  NovaStar\Vnnox
 * @author   Administrator <wanglong@novastar.tech>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/
 * @time     2018-10-23 10:37
 */

namespace DesignPattern\Behaviour\Observer;


/**
 * Class [PlayerObserver]
 * 播放器为观察者
 *
 * @category VNNOX-PHP
 * @package  DesignPattern\Behaviour\Observer
 * @author   Administrator <wanglong@novastar.tech>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/ (如果类中有相关引用,请修改此联系,如果有多个引用则添加多个`@link`)
 */
class PlayerObserver implements Observer
{
    /**
     * 播放器id
     *
     * @var int
     */
    private $player_id;

    /**
     * PlayerObserver constructor.
     *
     * @param int $player_id
     */
    public function __construct($player_id)
    {
        $this->player_id = $player_id;
    }

    /**
     * Function:generate
     * 下发节目
     *
     * @param string $type 媒体类型
     * @param int    $id   唯一标识
     *
     * @return void
     */
    public function generate($type, $id)
    {
        echo $type."发生修改(唯一标识为：$id)，播放器：".$this->player_id."下发节目".PHP_EOL;
    }

}