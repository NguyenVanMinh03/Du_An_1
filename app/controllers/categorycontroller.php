<?php

namespace App\controllers;
use App\models\categorymodel;
use App\request;
class categorycontroller extends controller{

     public function add(){
          $category = categorymodel::fetch_all();
          $this->view("admin/add_categories" ,['category' => $category]);
     }
     public function list(){
          $category = categorymodel::fetch_all();
          $this->view("admin/list_categories" ,['category' => $category]);
     }


     public function edit(request $request){
          $id = $request->getbody()['id'];
          $category = categorymodel::fetch_one($id);
return $this->view("admin/edit_categories",['category' => $category]);
     }

     public function add_cate(request $request ){
$category=$request->getbody();
$category['hinhanh']= $_FILES['hinhanh']['name'];
move_uploaded_file($_FILES['hinhanh']['tmp_name'] ,"img/".$_FILES['hinhanh']['name']);
$p=new categorymodel();
$p->insert($category);
header("location:/list_categories");
     }





     public function edit_cate(request $request){
          $data = $request->getbody();
          $data['hinhanh']= $_FILES['hinhanh']['name'];
          move_uploaded_file($_FILES['hinhanh']['tmp_name'] ,"img/".$_FILES['hinhanh']['name']);
$p = new categorymodel();
$p->update($data['id'], $data);
header("location:/list_categories");


     }


     public function update_cate(request $request){
          $data = $request->getbody();
          if ($_FILES['hinhanh']['size'] > 0) {
         
          
          $data['hinhanh']= $_FILES['hinhanh']['name'];
          move_uploaded_file($_FILES['hinhanh']['tmp_name'] ,"img/".$data['name']);
     }
$p = new categorymodel();
$p->update($data['id'], $data);
header("location:/list_categories");

     }

     public function delete_cate(request $request){
          $id= $request->getbody()['id'];
          $p = new categorymodel();
          $p->delete($id);
          header("location:/list_categories");
        
     }

    
}