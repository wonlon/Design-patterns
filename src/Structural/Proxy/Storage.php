<?php
/**
 * Created by PhpStorm.
 * Date: 2018/6/5
 * Time: 下午4:47
 */

namespace DesignPattern\Structural\Proxy;


interface Storage
{
    /**
     * saveData
     *
     * 存储数据
     *
     * @param $data
     * @return mixed
     */
    public function saveData($data);

    /**
     * findData
     *
     * 查询数据
     *
     * @param $id
     * @return mixed
     */
    public function findData($id);

    /**
     * deleteData
     *
     * 删除数据
     *
     * @param $id
     * @return mixed
     */
    public function deleteData($id);
}