<?php

namespace App\controllers;

use App\models\blogmodel;
use App\models\categorymodel;
use App\models\commentmodel;
use App\models\productmodel;
use App\models\usermodel;
use App\request;

class commentcontroller extends controller{
     public function add(request $request){
        $id  =$request->getbody()['id'];
       $product=productmodel::fetch_one($id);
       $producttt=productmodel::limit_producttuongtuc();
       $blog=blogmodel::fetch_all();
       $user=usermodel::fetch_all();
          $comment = commentmodel::limit_comment();
          $this->view("html/chi_tiet_san_pham" ,["comment"=>$comment,
          "product"=>$product,"blog"=>$blog,"producttt"=>$producttt,"user"=>$user] );
               }

     public function list(){
      
$comment = commentmodel::fetch_all();
$product=   productmodel::fetch_all();
$user=   usermodel::fetch_all();
$this->view("admin/list_comment" ,["comment"=>$comment,"user"=>$user,"product"=>$product] );
     }


    public function add_comment(request $request){
$comment  =$request->getbody();
//  $user_id  =isset($_SESSION["auth"]['user_id']);
// $product_id  =isset($_SESSION["auth"]['peoduct_id']);
// $id  =$request->getbody()['id'];
$p = new commentmodel();


$p->insert($comment);
header("Location:/");
    } 


    public function delete_comment(request $request){
     $comment  =$request->getbody()['id'];
     $p = new commentmodel();
     $p->delete($comment);
     header('location:/list_comment');
         } 

         public function delete_comment_ctsp(request $request){
            $comment  =$request->getbody()['id'];
            $id  =$request->getbody()['id'];
            $p = new commentmodel();
           
          
            $p->delete($comment);
            header('location:/');
                } 



         public function loadbinhluan(request $request){
            // session_start();
  
            $id = $request->getbody()['id'];
            $category = categorymodel::fetch_all();
            $user = usermodel::fetch_all();
            $producttt = productmodel::limit_producttuongtuc();
            $blog = blogmodel::limit_blog();
            $product = productmodel::fetch_one($id);
          //   $productc = productmodel::fetch_product_list($id);
            $comment = commentmodel::fetch_comment_list($id);
            
            return $this->view("html/chi_tiet_san_pham",
            [
               // 'productc'=>$productc, 
               'user'=>$user,"comment" => $comment,'blog' => $blog,
                 'category' => $category,
            'product'=>$product,
            'producttt'=>$producttt
            ]
            
            );
                 }


                //  public function listdm(Request $request)
                //  {
                //      $id = $request->getBody()["id"];
             
                //      $product = productmodel::fetch_product_list($id);
                //      $category = categorymodel::fetch_all();
                    
                //      $this->view("html/tat_ca_san_pham",["product" => $product ,'category' => $category, ]);
                //  }
}