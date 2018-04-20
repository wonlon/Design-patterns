<?php
class dog
{
    //1.构造函数前面加 protected，单例类禁止new
    //2.使用一个静态的方法，生产出一个唯一的实例
    //3. 构造函数前面加 final,防止被继承，修改单例的权限（实例不唯一）
    //4.final封锁clone方法，防止实例被克隆
    final protected  function __construct()
    {
    }

    //方法前面加final，方法不能被覆盖，类前面加final类不能被继承
    final protected function __clone()
    {
        // TODO: Implement __clone() method.
    }

    protected static $ins = null;
    public static function getInts()
    {
        if(self::$ins == null)
        {
            self::$ins = new self();
        }
        return self::$ins;
    }
}