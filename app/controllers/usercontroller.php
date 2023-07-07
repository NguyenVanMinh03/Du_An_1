<?php
namespace App\controllers;

use App\models\categorymodel;
use App\models\usermodel;
use App\request;

class usercontroller extends controller{

    
     public function add(){
          $user =usermodel::fetch_all();
        $this->view("html/dangky_dangnhap",["user"=>$user]);
        
     }
     public function list(){
          $user  =usermodel::fetch_all();
        $this->view("admin/list_user",["user"=>$user]);
        
     }
     
     public function edit(request $request){

          $id = $request->getbody()['id'];
          $category  =categorymodel::fetch_all();
          $user = usermodel::fetch_one($id);
return $this->view("html/edit_canhan",['category' => $category,'user' => $user]);
     }
     public function add_user(request $request){
          $user = $request->getbody();
          $user['hinhanh'] = $_FILES['hinhanh']['name'];
          move_uploaded_file($_FILES['hinhanh']['tmp_name'], "img/" . $_FILES['hinhanh']['name']);
        $p=new usermodel();
        $p->insert($user); 
        header("location:/");

     }

     public function edit_user(request $request){
          $user = $request->getbody();
          if ($_FILES['hinhanh']['size']>0) {
              
         
          $user['hinhanh'] = $_FILES['hinhanh']['name'];
          move_uploaded_file($_FILES['hinhanh']['tmp_name'], "img/" . $user['name']);
      }
        $p=new usermodel();
        $p->update($user['id'] , $user);
        header("location:/canhan");
     }

     public function delete_user(request $request){
          $user = $request->getbody()["id"];
         
        $p=new usermodel();
        $p->delete($user);
        header("location:/list_user");
     }
}
