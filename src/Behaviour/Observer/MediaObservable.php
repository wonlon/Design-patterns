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
 * @time     2018-10-23 10:48
 */

namespace DesignPattern\Behaviour\Observer;


/**
 * Class [MediaObservable]
 * 1.请描述类的功能
 * 2.请描述类的依赖
 * 3.请描述已知缺陷
 * 4.修改历史:
 *   修改人 + 日期 + 简单说明
 *
 * @category VNNOX-PHP
 * @package  DesignPattern\Behaviour\Observer
 * @author   Administrator <wanglong@novastar.tech>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/ (如果类中有相关引用,请修改此联系,如果有多个引用则添加多个`@link`)
 */
class MediaObservable extends Observable
{
    /**
     * Function:update
     * 被观察者发生了修改
     *
     * @param int $id 唯一标识
     *
     * @return mixed
     */
    public function update($id)
    {
        echo "媒体:$id,发生改变".PHP_EOL;
        $this->setChanged();
        $this->notifyAll("媒体", $id);
    }


}