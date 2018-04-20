<?php
interface db
{
    function conn();
}
class dbmysql implements db
{
    public function conn()
    {
        echo "连接上了mysql";
    }
}
class dbsqllite implements db
{
    public function conn()
    {
        echo "连接上了sqllite";
    }
}

class Factory{
    private $perfex;
    public function __construct($perfex)
    {
        $this->perfex = $perfex;
    }

    public  function createDb( $type )
    {
        switch ($type)
        {
            case "mysql":
                return new  dbmysql();
                break;
            case "litesql":
                return new  dbsqllite();
                break;
            default:
                return null;
                break;
        }
    }
}

//1.这种模式可以在构造函数中，处理一些数据
//2.在并发处理时，不同的进程占用各自的对象，导致处理速度较快，但是很占用内存
$me = new  Factory("me");
$db = $me->createDb("mysql");
$db->conn();

$me = new  Factory("you");
$db = $me->createDb("litesql");
$db->conn();