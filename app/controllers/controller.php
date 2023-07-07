<?php
namespace App\controllers;

class controller
{
     public function view($path, $data = [])
     {
          extract($data);
          include_once __DIR__ . "/../../resources/view/$path.php";
     }

     public function push_auth($users)
     {
         $_SESSION["auth"] = $users;
         
     }
     public function get_auth()
     {
         return $_SESSION["auth"];
     }
 
     function is_auth()
     {
         return isset($_SESSION["auth"]);
     }
 
     function request_auth($isLogin = true)
     {
         if ($this->is_auth() !== $isLogin) {
             $auth = $this->get_auth();
             
             header("location:/dangnhap");
             die;
         }
         if ($this->is_auth()) {
             $auth = $this->get_auth();
             if ($auth->id_role != 1) {
                 header("location:/canhan");
                 die;
             }
         }
     }
     

  
     
}