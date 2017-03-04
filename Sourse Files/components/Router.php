<?php


class Router
{
    //массив с маршрутами
    private $routes;

    /**
     * Router constructor.
     */
    public function __construct()
    {
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }

    public function run(){

        echo 'Class Router, method run';
    }
}