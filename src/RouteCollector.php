<?php
namespace Xuesheng\Route;

class RouteCollector
{
    protected $dataGenerator;
    protected $routeParser;

    public function __construct(RoutePaser $routeParser, DataGenerator $dataGenerator)
    {
        $this->routeParser = $routeParser;
        $this->dataGenerator = $dataGenerator;
    }

    //添加路由集合，先实现get、post，暂不实现路由组
    protected function addRoute($httpMethod, $route, $handler)
    {
        /*
         * 路由规则：'/user/{id}'
         * URL：baseUrl/user/1
         * 解析成：
         * ['user',1]
         */



    }


}