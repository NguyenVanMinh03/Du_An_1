<?php

namespace App\controllers;

use App\models\blogmodel;
use App\models\categorymodel;
use App\models\commentmodel;
use App\models\newmodel;
use App\models\productmodel;
use App\request;

class productcontroller extends controller
{

     public function add()
     {
          $category = categorymodel::fetch_all();
          $this->view("admin/add_product", ['category' => $category]);
     }
     public function list()
     {
          $product = productmodel::fetch_all();
          $this->view("admin/list_product", ['product' => $product]);
     }

     public function edit(request $request)
     {
          $id = $request->getbody()['id'];
          $product = productmodel::fetch_one($id);
          $category = categorymodel::fetch_all();
          return $this->view(
               "admin/edit_product",
               [
                    'product' => $product,
                    'category' => $category
               ]
          );
     }


     public function add_product(request $request)
     {
          $product = $request->getbody();
          $product['hinhanh'] = $_FILES['hinhanh']['name'];
          move_uploaded_file($_FILES['hinhanh']['tmp_name'], "img/" . $_FILES['hinhanh']['name']);
          $p = new productmodel();
          $p->insert($product);
          header("location:/list_product");
         exit ;  
     }
    


     public function edit_product(request $request)
     {
          $product = $request->getbody();
          if ($_FILES['hinhanh']['size'] > 0) {
               $product['hinhanh'] = $_FILES['hinhanh']['name'];
               move_uploaded_file($_FILES['hinhanh']['tmp_name'],'img/'.$product['hinhanh']); 
          }
          $p = new productmodel();
          $p->update($product['id'] , $product);
          header("location:/list_product");
     }
     
     public function delete_product(request $request)
     {
          $product = $request->getbody()["id"];
         
          $p = new productmodel();
          $p->delete($product);
          header("location:/list_product");
     }


     public function load(request $request){
          // session_start();

          $id = $request->getbody()['id'];
          $category = categorymodel::fetch_all();
          $producttt = productmodel::limit_producttuongtuc();
          $blog = blogmodel::limit_blog();
          $product = productmodel::fetch_one($id);
          $comment = commentmodel::limit_comment();
          
          return $this->view("html/chi_tiet_san_pham",
          [
               "comment" => $comment,'blog' => $blog,
               'category' => $category,
          'product'=>$product,
          'producttt'=>$producttt
          ]
          
          );
               }


               public function listdm(Request $request)
    {
        $id = $request->getBody()["id"];

        $product = productmodel::fetch_product_list($id);
        $category = categorymodel::fetch_all();
       
        $this->view("html/tat_ca_san_pham",["product" => $product ,'category' => $category, ]);
    }


    public function listdmhome(Request $request)
    {
        $id = $request->getBody()["id"];

        $product = productmodel::fetch_product_list($id);
        $category = categorymodel::fetch_all();
        $blog = blogmodel::limit_blog();
       
        $this->view("html/index",["product" => $product ,'blog' => $blog, 'category' => $category]);
    }
}
