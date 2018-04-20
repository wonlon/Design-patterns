<?php
class BaseArt{
    protected $content;
    protected $art = null;
    public function __construct( $contenet )
    {
        $this->content = $contenet;
    }
    public function decorator()
    {
        return $this->content;
    }
}

class BianArt extends BaseArt{

    public function __construct( BaseArt $art)
    {
        $this->art = $art;
    }
    public function decorator()
    {
        return $this->content = $this->art->decorator().'小编摘要';
    }
}

class SeoArt extends BaseArt{

    public function __construct( BaseArt $art)
    {
        $this->art = $art;
    }
    public function decorator()
    {
        return $this->content = $this->art->decorator().'增加SEO';
    }
}

$art = new BianArt(new  BaseArt("人民日报"));
echo $art->decorator();

echo PHP_EOL;
$art = new SeoArt(new BianArt(new  BaseArt("人民日报")));
echo $art->decorator();
echo PHP_EOL;
$art = new BianArt(new SeoArt(new BaseArt("上海日报")));
echo $art->decorator();