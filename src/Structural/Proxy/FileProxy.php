<?php
/**
 * Created by PhpStorm.
 * Date: 2018/6/5
 * Time: 下午5:15
 */

namespace DesignPattern\Structural\Proxy;


class FileProxy implements Storage
{
    /**
     * @var Storage
     */
    private $storage;

    public function __construct()
    {
        $this->storage = new File();
    }

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
        echo "对文件存储操作进行认证" . PHP_EOL;
        $this->storage->saveData($data);
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
        echo "对文件查询操作进行认证" . PHP_EOL;
        $this->storage->findData($id);
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
        echo "对文件删除操作进行认证" . PHP_EOL;
        $this->storage->deleteData($id);
    }

}