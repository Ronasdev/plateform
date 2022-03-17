<?php
namespace Framework;

class Request{
public $url ;
    public function __construct(String $url)
    {
        $this->url = trim($url,"/");
    }

}