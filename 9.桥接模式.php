<?php
abstract class info{
    protected $send = null;
    public function __construct($send)
    {
        $this->send = $send;
    }
    abstract public function msg( $content );
    public function send($to, $content){
        $content = $this->msg($content);
        $this->send->send($to, $content);
    }
}

class zn{
    public function send($to, $content){
        echo "站内给".$to."内容是：".$content;
    }
}
class email{
    public function send($to, $content){
        echo "email给".$to."内容是：".$content;
    }
}
class sns{
    public function send($to, $content){
        echo "email给".$to."内容是：".$content;
    }
}


class commonInfo extends info{
    public function msg($content)
    {
        // TODO: Implement msg() method.
        return '普通'.$content;
    }
}



class warnInfo extends info{
    public function msg($content)
    {
        // TODO: Implement msg() method.
        return '紧急'.$content;
    }
}


class dangerInfo extends info{
    public function msg($content)
    {
        // TODO: Implement msg() method.
        return '特急'.$content;
    }
}


$info = new commonInfo(new zn());
$info->send('小明','吃饭了');

$info = new dangerInfo(new email());
$info->send('小明','家里失火了');

