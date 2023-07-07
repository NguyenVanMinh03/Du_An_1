<?php
namespace App;

class router
{
     public static $routers = [];

     protected $request;

    public function __construct()
    {
        $this->request = new request();
    }
     public static function get($path, $callback)
     {
          static::$routers["get"][$path] = $callback;
     }
     public static function post($path, $callback)
     {
          static::$routers["post"][$path] = $callback;
     }
     public function getpath()
     {
          $path = $_SERVER['REQUEST_URI'] ?? '/';
          // $path = str_replace("/php2/duan/public/", '/', $path);
          $coistion = strpos($path, "?");
          if ($coistion) {
               $path = substr($path, 0, $coistion);
          }
          return $path;
     }


     public function getmethod()
     {
          return strtolower($_SERVER["REQUEST_METHOD"]);
     }
     public function resolve()
     {
          $path = $this->getpath();

          $method = $this->getmethod();
          $callback = static::$routers[$method][$path] ?? false;


          if ($callback === false) {
               echo "lỗi lỗi lỗi lỗi";
               exit;
          }
          // echo "<pre/>";
          // var_dump(static::$routers);
          if (is_callable($callback)) {
               return $callback();
          }
          if (is_array($callback)) {
               $class = new $callback[0];
               $action = $callback[1];
               return call_user_func([$class, $action], $this->request);
           }

     }
}