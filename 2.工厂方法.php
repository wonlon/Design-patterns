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

interface  Factory{
    function createDb();
}
class mysqlFactory implements Factory {
    public function createDb()
    {
        // TODO: Implement createDb() method.
        return new  dbmysql();
    }
}

class sqlliteFactory implements Factory {
    public function createDb()
    {
        // TODO: Implement createDb() method.
        return new  dbsqllite();
    }
}

$factory = new mysqlFactory();
$db = $factory->createDb();
$db->conn();

