<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-25
 * Time: 14:57
 */

namespace DesignPattern\Structural\Adapter\InterfaceAdapter;


interface DataBaseInterface
{
    public function add();

    public function delete();

    public function update();

    public function selection();

    public function connection();

    public function close();

    public function drop();

    public function commit();

    public function translationStart();

    public function rollback();
}