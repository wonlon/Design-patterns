<?php
class banzhu{
    protected $power = 1;
    protected $top = 'admin';
    public function process($lev)
    {
        if($lev <= $this->power)
        {
            echo "版主删除";
        }
        else
        {
            $top = new $this->top();
            $top->process($lev);
        }
    }
}

class admin{
    protected $power = 2;
    protected $top = 'police';
    public function process($lev)
    {
        if($lev <= $this->power)
        {
            echo "管理员封号";
        }
        else
        {
            $top = new $this->top();
            $top->process($lev);
        }
    }
}


class police{
    protected $power;
    protected $top;
    public function process($lev)
    {
        echo "抓起来";
    }
}

//1.责任链模式就是一级一级往上，上报
//2.本级别能处理就处理就处理，处理不了，向上上报到上一等级
$banzhu = new banzhu();
$banzhu->process(1);