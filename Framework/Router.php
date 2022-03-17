<?php
namespace Framework;
class Router{
    public $request;
    public $params = [];

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function parse()
    {
        $params = explode("/",$this->request->url) ;

        $this->request->controllerName = $params[0];
        $this->request->controllerName = ucfirst($this->request->controllerName)."Controller";
        $this->request->action = $params[1];
        $this->request->params = array_slice($params,2);
        return $this->request;
    }
}
