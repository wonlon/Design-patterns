<?php
/**
 * Created by PhpStorm.
 * Date: 2018/6/21
 * Time: 上午10:04
 */

namespace DesignPattern\Structural\Composite;


class Media implements Component
{
    /**
     * @var string
     */
    private $name = '';

    /**
     * Media constructor.
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
        echo '媒体不支持添加子元素操作' . PHP_EOL;
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
        echo '媒体不支持删除子元素操作' . PHP_EOL;
    }

    /**
     * getChild
     * 获取子元素
     * @return mixed
     * Author:kinddylee@gmail.com
     */
    public function getChild() : array
    {
        echo '媒体不支持获取子元素操作' . PHP_EOL;
    }

}