<?php
interface Math{
    public function calc($op1,$op2);
}
class MathAdd implements Math {
    public function calc($op1, $op2)
    {
        return $op1+$op2;
    }
}
class MathJian implements Math{
    public function calc($op1, $op2)
    {
        return $op1-$op2;
    }
}
class MathChen implements Math{
    public function calc($op1, $op2)
    {
        // TODO: Implement calc() method.
        return $op1*$op2;
    }
}
class MathChu implements Math{
    public function calc($op1, $op2)
    {
        // TODO: Implement calc() method.
        return $op1/$op2;
    }
}

class computer{
    private $math = null;
    public function __construct( $type )
    {
        $mathclass = "Math".$type;
        $this->math = new $mathclass();
    }
    public function calclute($op1, $op2)
    {
        return $this->math->calc($op1, $op2);
    }
}

//1.策略模式和简单工厂很相似
//2.区别：简单工厂直接返回的是对象，策略模式是在类的内部，调用子类的方法，返回的结果

$computer = new  computer("Add");
echo  $computer->calclute(3,5);