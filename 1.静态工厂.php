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
    public static function createDb( $type )
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
    public static function setSome()
    {

    }
}

//1.简单工厂也是静态工厂
//2.setSome与上述的构造函数的作用差不多
//3.只有一个createDb静态区，多进程访问，需要等待，内存减少，但是，有串行排队
Factory::setSome();
$db = Factory::createDb("mysql");
$db->conn();

Factory::setSome();
$db = Factory::createDb("litesql");
$db->conn();
