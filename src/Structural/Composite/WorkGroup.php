<?php
/**
 * Created by PhpStorm.
 * Date: 2018/6/21
 * Time: 上午10:03
 */

namespace DesignPattern\Structural\Composite;


class WorkGroup implements Component
{
    /**
     * @var array
     */
    private $list = [];

    /**
     * @var string
     * 工作组名称
     */
    private $name = '';

    /**
     * WorkGroup constructor.
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * display
     * Author:kinddylee@gmail.com
     */
    public function display()
    {
        echo $this->name . PHP_EOL;
    }

    /**
     * add
     * 增加元素
     * @param Component $component
     * @return void
     * Author:kinddylee@gmail.com
     */
    public function add(Component $component)
    {
        $this->list[spl_object_hash($component)] = $component;
    }

    /**
     * remove
     * 删除元素
     * @param Component $component
     * @return void
     * Author:kinddylee@gmail.com
     */
    public function remove(Component $component)
    {
        if (isset($this->list[spl_object_hash($component)]))
            unset($this->list[spl_object_hash($component)]);
    }

    /**
     * getChild
     * 获取子元素
     * @return array
     * Author:kinddylee@gmail.com
     */
    public function getChild() : array
    {
        return $this->list;
    }

}