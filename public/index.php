<?php 


use App\controllers\blogcontroller;
use App\controllers\productcontroller;
use App\controllers\usercontroller;
use App\router;
use App\controllers\homecontroller;
use App\controllers\categorycontroller;
use App\controllers\commentcontroller;
use App\controllers\logincontroller;

require_once __DIR__ ."/../vendor/autoload.php";

$router = new router;

router::get("/", [homecontroller::class, "home"]);
router::get("/chi-tiet-san-pham",[homecontroller::class,"chi_tiet_san_pham"]);
router::get("/chi-tiet-tin-tuc",[homecontroller::class,"chi_tiet_tin_tuc"]);
router::get("/chinh_sach_thanh_toan",[homecontroller::class,"chinh_sach_thanh_toan"]);
router::get("/chinh_sach_thanh_vien",[homecontroller::class,"chinh_sach_thanh_vien"]);
router::get("/dangky_dangnhap",[homecontroller::class,"dangky_dangnhap"]);
router::get("/huong_dan_thanh_toan",[homecontroller::class,"huong_dan_thanh_toan"]);
router::get("/huong_dan_mua_hang",[homecontroller::class,"huong_dan_mua_hang"]);
router::get("/gioithieu",[homecontroller::class,"gioithieu"]);
router::get("/lienhe",[homecontroller::class,"lienhe"]);
router::get("/qua_tang_chi_an",[homecontroller::class,"qua_tang_chi_an"]);
router::get("/tat_ca_san_pham",[homecontroller::class,"tat_ca_san_pham"]);
router::get("/thong_tin_ca_nhan",[homecontroller::class,"thong_tin_ca_nhan"]);
router::get("/tintuc",[homecontroller::class,"tintuc"]);
router::get("/tongquan_admin",[homecontroller::class,"tongquan_admin"]);
router::get("/canhan",[homecontroller::class,"canhan"]);
router::get("/san_pham_tim_kiem",[homecontroller::class,"san_pham_tim_kiem"]);



router::get("/add_categories",[categorycontroller::class,"add"]);
router::post("/add_categories",[categorycontroller::class,"add_cate"]);
router::get("/list_categories",[categorycontroller::class,"list"]);
router::post("/edit_categories",[categorycontroller::class,"update_cate"]);
router::get("/delete_cate",[categorycontroller::class,"delete_cate"]);
router::get("/edit_categories",[categorycontroller::class,"edit"]);
router::get("/danhmuc",[productcontroller::class,"listdm"]);
router::get("/danhmuchome",[productcontroller::class,"listdmhome"]);

router::get("/add_blog",[blogcontroller::class,"add"]);
router::post("/add_blog",[blogcontroller::class,"add_blog"]);
router::get("/list_blog",[blogcontroller::class,"list"]);
router::get("/edit_blog",[blogcontroller::class,"edit"]);
router::post("/edit_blog",[blogcontroller::class,"edit_blog"]);
router::get("/delete_blog",[blogcontroller::class,"delete_blog"]);
router::get("/chi-tiet-tin-tuc",[blogcontroller::class,"listblog"]);


router::get("/dangky",[usercontroller::class,"add"]);
router::post("/dangky",[usercontroller::class,"add_user"]);
router::get("/list_user",[usercontroller::class,"list"]);
router::get("/edit_canhan",[usercontroller::class,"edit"]);
router::post("/edit_canhan",[usercontroller::class,"edit_user"]);
router::get("/delete_user",[usercontroller::class,"delete_user"]);

router::post("/add_product",[productcontroller::class,"add_product"]);
router::get("/add_product",[productcontroller::class,"add"]);
router::get("/list_product",[productcontroller::class,"list"]);
router::get("/edit_product",[productcontroller::class,"edit"]);
router::post("/edit_product",[productcontroller::class,"edit_product"]);
router::get("/delete_product",[productcontroller::class,"delete_product"]);
router::get("/chi-tiet-san-pham",[productcontroller::class,"load"]);

router::get("/dangnhap",[homecontroller::class,"dangnhap_dangky"]);
router::post("/dangnhap", [logincontroller::class, "loginuser"]);
router::get("/dangxuat", [logincontroller::class, "dangxuat"]);


router::post("/chi-tiet-san-pham", [commentcontroller::class, "add_comment"]);
router::get("/chi-tiet-san-pham", [commentcontroller::class, "add"]);
router::get("/list_comment", [commentcontroller::class, "list"]);
router::get("/chi-tiet-san-pham", [commentcontroller::class, "loadbinhluan"]);
router::get("/delete_comment", [commentcontroller::class, "delete_comment"]);
router::get("/delete_comment_ctsp", [commentcontroller::class, "delete_comment_ctsp"]);



$router->resolve();




