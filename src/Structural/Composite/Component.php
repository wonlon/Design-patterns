<?php
/**
 * Created by PhpStorm.
 * Date: 2018/6/21
 * Time: 上午9:59
 */

namespace DesignPattern\Structural\Composite;


interface Component
{
    /**
     * display
     * @return mixed
     * Author:kinddylee@gmail.com
     */
    public function display();

    /**
     * add
     * 增加元素
     * @param Component $component
     * @return void
     * Author:kinddylee@gmail.com
     */
    public function add(Component $component);

    /**
     * remove
     * 删除元素
     * @param Component $component
     * @return void
     * Author:kinddylee@gmail.com
     */
    public function remove(Component $component);

    /**
     * getChild
     * 获取子元素
     * @return array
     * Author:kinddylee@gmail.com
     */
    public function getChild() : array ;
}