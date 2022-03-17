<?php
namespace Framework;
use Framework\Request;

class Application{
    public static $controller = "article";
    public static $action = "index";
    public static $params = [];

    public static function process()
    {
        $router = new Router(new Request($_GET['url']));
        $request = $router->parse();
        
        self::$controller =  "Controllers\\".$request->controllerName;
        
        $controller = new self::$controller();
        $action = $request->action;

        if ($request->params !=[]) {
            $controller->$action($request->params);
        } else {
            $controller->$action();
        }
        
        
    }


}