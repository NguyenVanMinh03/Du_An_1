<?php
namespace App\controllers;

use App\models\blogmodel;
use App\models\categorymodel;
use App\models\productmodel;
use App\request;

class blogcontroller extends controller{

     public function add(){
          $blog  =blogmodel::fetch_all();
        $this->view("admin/add_blog",["blog"=>$blog]);
        
     }
     public function list(){
          $blog  =blogmodel::fetch_all();
        $this->view("admin/list_blog",["blog"=>$blog]);
        
     }

     public function listhome(){
          $blog  =blogmodel::fetch_all();
        $this->view("html",["blog"=>$blog]);
        
     }

     public function edit(request $request){
          $id= $request->getbody()["id"] ;
          $blog  =blogmodel::fetch_one($id);
      return  $this->view("admin/edit_blog",["blog"=>$blog]);
     }

     public function add_blog(request $request){
$blog = $request->getbody();
$blog['hinhanh']= $_FILES['hinhanh']['name'];
move_uploaded_file($_FILES['hinhanh']['tmp_name'] ,"img/".$_FILES['hinhanh']['name']);
     $p = new blogmodel();
     $p->insert($blog);
header("location:/list_blog");
}


public function edit_blog(request $request){
     $blog = $request->getbody();
     if ($_FILES['hinhanh']['size'] > 0) {
          $blog['hinhanh'] = $_FILES['hinhanh']['name'];
          move_uploaded_file($_FILES['hinhanh']['tmp_name'],'img/'.$blog['hinhanh']); 
     }
          $p = new blogmodel();
          $p->update($blog['id'] , $blog);
     header("location:/list_blog");
     }


     public function delete_blog(request $request){
          $id = $request->getbody()["id"];
         
               $p = new blogmodel();
               $p->delete($id);
          header("location:/list_blog");
          }



          public function listblog(Request $request)
          {
              $id = $request->getBody()["id"];
              $blogg = blogmodel::limit_blog();
              $product = productmodel::fetch_all();
              $blog = blogmodel::fetch_one($id);
             
              $this->view("html/chi_tiet_tin_tuc",['blog' => $blog ,'product' => $product,'blogg' => $blogg ]);
          }


          // public function all_blog(Request $request)
          // {
             
          //     $blog = blogmodel::fetch_all();
              
             
          //     $this->view("html/chi_tiet_tin_tuc",['blog' => $blog ]);
          // }
}