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
 * @time     2018-7-26 11:23
 */

namespace DesignPattern\Behaviour\State;


/**
 * Class [Player]
 * 1.请描述类的功能
 * 2.请描述类的依赖
 * 3.请描述已知缺陷
 * 4.修改历史:
 *   修改人 + 日期 + 简单说明
 *
 * @category VNNOX-PHP
 * @package  DesignPattern\Behaviour\State
 * @author   Administrator <wanglong@novastar.tech>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/ (如果类中有相关引用,请修改此联系,如果有多个引用则添加多个`@link`)
 */
class Player
{
    /**
     * 播放器版本号
     *
     * @var string
     */
    private $_version = '';

    /**
     * 播放器唯一标识
     *
     * @var int
     */
    private $_id = 0;

    /**
     * 返回播放器版本号
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->_version;
    }

    /**
     * 版本号
     *
     * @param string $version Int
     *
     * @return void
     */
    public function setVersion($version)
    {
        $this->_version = $version;
    }

    /**
     * 获取播放器ID
     *
     * @return int
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * 设置播放器ID
     *
     * @param int $id 播放器ID
     *
     * @return int
     */
    public function setId($id)
    {
        $this->_id = $id;
    }
}