<?php
class user{
    public $loginNum;
    public $hobby;
    public $observers;
    public function __construct( $hobby )
    {
        $this->hobby = $hobby;
        $this->loginNum = rand(1,10);
        $this->observers = new SplObjectStorage();
    }

    public function login()
    {
        $this->notify();
    }
    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }
    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }
    public function notify()
    {
        $this->observers->rewind();
        while ($this->observers->valid())
        {
            $observer = $this->observers->current();
            $observer->undate($this);
            $this->observers->next();
        }
    }
}
class secrity implements SplObserver{
    public function update(SplSubject $subject)
    {
        // TODO: Implement update() method.
        IF($subject->loginNum <= 3) {
            echo "安全登录";
        }else{
            echo "异常登录";
        }
    }
}
class ad implements SplObserver{
    public function update(SplSubject $subject)
    {
        // TODO: Implement update() method.
        IF($subject->hobby == "sport") {
            echo "乔丹篮球鞋";
        }else{
            echo "日常用品";
        }
    }
}

$user = new  user('sport');
$user->attach(new secrity());
$user->attach(new ad());
$user->login();