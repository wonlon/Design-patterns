<?php
/**
 * Created by PhpStorm.
 * Date: 2018/6/5
 * Time: 下午4:47
 */

namespace DesignPattern\Structural\Proxy;


class File implements Storage
{
    /**
     * saveData
     *
     * 存储数据
     *
     * @param $data
     * @return mixed
     * Author:kinddylee@gmail.com
     */
    public function saveData($data)
    {
        echo "通过文件存储数据: $data" . PHP_EOL;
    }

    /**
     * findData
     *
     * 查询数据
     *
     * @param $id
     * @return mixed
     * Author:kinddylee@gmail.com
     */
    public function findData($id)
    {
        echo "找到ID为 $id 的数据" . PHP_EOL;
    }

    /**
     * deleteData
     *
     * 删除数据
     *
     * @param $id
     * @return mixed
     * Author:kinddylee@gmail.com
     */
    public function deleteData($id)
    {
        echo "删除ID为 $id 的数据" . PHP_EOL;
    }

}