<?php
namespace App\controllers;

use App\models\usermodel;
use App\request;

class  logincontroller extends controller{
     public function login(){

          session_start();
          $this->view("/dangnhap");

     }



     public function loginuser(request $request) {
          session_start();

     $users = $request->getbody();

     $u = new usermodel();
     $uCheck = $u->fetch_login($users["user_email"], $users["password"]);

     // print_r($userCheck);

     if ($uCheck == true) {
         $user = usermodel::fetch_login($users["user_email"], $users["password"]);

         $this->push_auth($user);
         header("location: /canhan");
     } else {
         header("location: /dangnhap");
         
     }
     }

     public function dangxuat(){

          session_start();
          session_destroy();
          header("location: /");

     }
}