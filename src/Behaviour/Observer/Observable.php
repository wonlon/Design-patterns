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
 * @time     2018-10-23 10:13
 */

namespace DesignPattern\Behaviour\Observer;


/**
 * Class [Observable]
 * 抽象-被观察者
 *
 * @category VNNOX-PHP
 * @package  DesignPattern\Behaviour\Observer
 * @author   Administrator <wanglong@novastar.tech>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/ (如果类中有相关引用,请修改此联系,如果有多个引用则添加多个`@link`)
 */
abstract class Observable
{
    /**
     * 状态锁
     *
     * @var bool
     */
    protected $changeStatus = false;
    /**
     * 被观察者容器
     *
     * @var array
     */
    protected $observerArrayList = [];

    /**
     * Function:addObserver
     * 增加观察者
     *
     * @param Observer $observer 观察者对象
     *
     * @return void
     */
    public function addObserver(Observer $observer)
    {
        $this->observerArrayList[] = $observer;
    }

    /**
     * Function:getObserverNum
     * 返回观察者的数量
     *
     * @return int
     */
    public function getObserverNum()
    {
        return count($this->observerArrayList);
    }

    /**
     * Function:setChanged
     * 打开状态锁
     *
     * @return void
     */
    public function setChanged()
    {
        $this->changeStatus = true;
    }

    /**
     * Function:removeObserver
     * 删除观察者
     *
     * @param Observer $observer 观察者对象
     *
     * @return void
     */
    public function removeObserver(Observer $observer)
    {
        $key = array_search($this->observerArrayList, $observer);
        if ($key === 0 || $key) {
            array_splice($arr, $key, 1);
        }
    }

    /**
     * Function:notifyAll
     *  通知所有的观察者
     *
     * @param string $type 媒体类型
     * @param int    $id   唯一标识
     *
     * @return void
     */
    public function notifyAll($type, $id)
    {
        if ($this->changeStatus == true) {
            foreach ($this->observerArrayList as $observer) {
                $observer->generate($type, $id);
            }
        }
        //还原锁
        $this->changeStatus = false;
    }

    /**
     * Function:update
     * 被观察者发生了修改
     *
     * @param int $id 唯一标识
     *
     * @return mixed
     */
    abstract public function update($id);
}