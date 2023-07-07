<?php

namespace App\controllers;

use App\models\blogmodel;
use App\models\categorymodel;
use App\models\commentmodel;
use App\models\productmodel;
use App\models\usermodel;
use App\request;

class homecontroller extends controller
{
  public function home()
  {
    $category = categorymodel::fetch_all();
    $product = productmodel::limit_product();
    $blog = blogmodel::limit_blog();
    $this->view(
      "html/index",
      [
        'category' => $category,
        'product' => $product, 'blog' => $blog
      ]
    );
  }

  public function chi_tiet_san_pham()
  {
    $user = usermodel::fetch_all();
    $category = categorymodel::fetch_all();
    $product = productmodel::fetch_all();
    $blog = blogmodel::limit_blog();
    $comment = commentmodel::limit_comment();
    $this->view("html/chi_tiet_san_pham", [
      "comment" => $comment, "category" => $category,
      "product" => $product, 'blog' => $blog, 'user' => $user
    ]);
  }


  
  
  public function chinh_sach_thanh_toan()
  {
    $category = categorymodel::fetch_all();
    $product = productmodel::fetch_all();
    $blog = blogmodel::fetch_all();
    $this->view("html/chinh_sach_thanh_toan", [
      "category" => $category,
      "product" => $product, 'blog' => $blog
    ]);
  }
  public function chi_tiet_tin_tuc()
  {
    $category = categorymodel::fetch_all();
    $product = productmodel::fetch_all();
    $blog = blogmodel::limit_blog();
    $this->view("html/chi_tiet_tin_tuc", [
      "category" => $category,
      "product" => $product, 'blog' => $blog
    ]);
  }
  public function chinh_sach_thanh_vien()
  {
    $category = categorymodel::fetch_all();
    $product = productmodel::fetch_all();
    $blog = blogmodel::limit_blog();
    $this->view("html/chinh_sach_thanh_vien", [
      "category" => $category,
      "product" => $product, 'blog' => $blog
    ]);
  }
  public function dangky_dangnhap()
  {
    $category = categorymodel::fetch_all();
    $product = productmodel::fetch_all();
    $blog = blogmodel::limit_blog();
    $this->view("html/dangky_dangnhap", [
      "category" => $category,
      "product" => $product, 'blog' => $blog
    ]);
  }

  public function dangnhap_dangky()
  {
    $category = categorymodel::fetch_all();
    $product = productmodel::fetch_all();
    $blog = blogmodel::limit_blog();
    $this->view("html/dangnhap_dangky", [
      "category" => $category,
      "product" => $product, 'blog' => $blog
    ]);
  }

  public function huong_dan_thanh_toan()
  {
    $category = categorymodel::fetch_all();
    $product = productmodel::fetch_all();
    $blog = blogmodel::limit_blog();
    $this->view("html/huong_dan_thanh_toan", [
      "category" => $category,
      "product" => $product, 'blog' => $blog
    ]);
  }
  public function gioithieu()
  {
    $category = categorymodel::fetch_all();
    $product = productmodel::fetch_all();
    $blog = blogmodel::limit_blog();
    $this->view("html/gioithieu", [
      "category" => $category,
      "product" => $product, 'blog' => $blog
    ]);
  }
  public function huong_dan_mua_hang()
  {
    $category = categorymodel::fetch_all();
    $product = productmodel::fetch_all();
    $blog = blogmodel::limit_blog();
    $this->view("html/huong_dan_mua_hang", [
      "category" => $category,
      "product" => $product, 'blog' => $blog
    ]);
  }
  public function lienhe()
  {
    $category = categorymodel::fetch_all();
    $product = productmodel::fetch_all();
    $blog = blogmodel::limit_blog();
    $this->view("html/lienhe", [
      "category" => $category,
      "product" => $product, 'blog' => $blog
    ]);
  }
  public function qua_tang_chi_an()
  {
    $category = categorymodel::fetch_all();
    $product = productmodel::fetch_all();
    $blog = blogmodel::limit_blog();
    $this->view("html/qua_tang_chi_an", [
      "category" => $category,
      "product" => $product, 'blog' => $blog
    ]);
  }
  public function tat_ca_san_pham()
  {
    $category = categorymodel::fetch_all();
    $product = productmodel::fetch_all();
    $blog = blogmodel::limit_blog();
    $this->view("html/tat_ca_san_pham", [
      "category" => $category,
      "product" => $product, 'blog' => $blog
    ]);
  }
  public function thong_tin_ca_nhan()
  {
    $category = categorymodel::fetch_all();
    $product = productmodel::fetch_all();
    $blog = blogmodel::limit_blog();
    $this->view("html/thong_tin_ca_nhan", [
      "category" => $category,
      "product" => $product, 'blog' => $blog
    ]);
  }
  public function tintuc()
  {
    $category = categorymodel::fetch_all();
    $product = productmodel::fetch_all();
    $blog = blogmodel::fetch_all();
    $this->view("html/tintuc", [
      "category" => $category,
      "product" => $product, 'blog' => $blog
    ]);
  }
  public function tongquan_admin()
  {
    $category = categorymodel::fetch_all();
    $product = productmodel::fetch_all();
    $comment = commentmodel::fetch_all();
    $blog = blogmodel::limit_blog();
    $this->view("admin/tongquan_admin", [
      "category" => $category,
      "comment" => $comment, 'blog' => $blog, "product" => $product
    ]);
  }

  public function canhan()
  {
    // $category = categorymodel::fetch_all();
    // $product = productmodel::fetch_all();
    $user = usermodel::fetch_all();
    // $blog = blogmodel::limit_blog();
    $this->view("html/canhan", [
      // "category" => $category,
      "user" => $user,
      // 'blog' => $blog,
      // "product" => $product
    ]);
  }

  //    public function dangky_dangnhap(){
  //     $category = categorymodel::fetch_all();
  //     $product = productmodel::fetch_all();
  //      $blog = blogmodel::limit_blog();
  //     $this->view("html/dangky_dangnhap",[
  //       "category"=>$category,
  //       "product"=>$product
  //       ,'blog' => $blog
  //     ]);
  //  }

}
