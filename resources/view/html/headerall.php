<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="../css/index.css">
     <link rel="stylesheet" href="../fontawesome-free-6.1.1-web/css/all.css">
     <link href="//bizweb.dktcdn.net/100/476/144/themes/895508/assets/main.scss.css?1687487251955" rel="stylesheet"
          type="text/css" media="all" />
     <link href="//bizweb.dktcdn.net/100/476/144/themes/895508/assets/favicon.png?1687487251955" type="image/x-icon" />
     <!-- <link rel="preload" as="script" href="//bizweb.dktcdn.net/100/476/144/themes/895508/assets/jquery.js?1687487251955" /> -->
     <!-- <link rel="preload" as="script" href="//bizweb.dktcdn.net/100/476/144/themes/895508/assets/swiper.js?1687487251955" /> -->
     <!-- <link rel="preload" as='style' type="text/css" href="//bizweb.dktcdn.net/100/476/144/themes/895508/assets/main.scss.css?1687487251955"> -->
     <link rel="preload" as='style' type="text/css" href="//bizweb.dktcdn.net/100/476/144/themes/895508/assets/index.scss.css?1687487251955">
     <link href="//bizweb.dktcdn.net/100/476/144/themes/895508/assets/main.scss.css?1687487251955" rel="stylesheet"
          type="text/css" media="all" />

     <link href="//bizweb.dktcdn.net/100/476/144/themes/895508/assets/main.scss.css?1687487251955" rel="stylesheet"
          type="text/css" media="all" />

     <link href="//bizweb.dktcdn.net/100/476/144/themes/895508/assets/product_style.scss.css?1687487251955"
          rel="stylesheet" type="text/css" media="all" />
     <link href="//bizweb.dktcdn.net/100/476/144/themes/895508/assets/main.scss.css?1687487251955" rel="stylesheet" type="text/css" media="all" />
     
</head>

<body>
     <!-- <div class="container"></div> -->
     <header>
          <div>
               <div class="header-top">
                    <div class="header-top-logo">
                         <a href="/"><img width="180" height="50" src="../img/logo.webp" alt=""></a>
                    </div>

                    <div class="header-top-seach">
                         <form action="">
                              <input type="text" placeholder="Nhập Tên Sản Phẩm ...">
                              <button><i class="fa-solid fa-magnifying-glass"></i></button>
                         </form>
                    </div>

                    <div class="header-top-hotline">
                         <i class="fa-solid fa-phone"></i>
                         <div class="header-top-hotline-flex2">
                              <p>Hotline:</p>
                              <a href="/">0395222660</a>
                         </div>
                    </div>

                    <div class="header-top-email">

                         <i class="fa-solid fa-envelope"></i>
                         <div class="header-top-email-flex2">
                              <p>Email:</p>
                              <a href="/">minhnvph20236@fpt</a>
                         </div>

                    </div>

                    <div class="header-top-account">
                         <?php if (isset($_SESSION['auth'])) : ?>
                              <?php if ($_SESSION['auth']->role == "1") : ?>
                                  

                              <?php endif ?> 
                              <a href="/canhan"> <i title="Cá Nhân" class="fa-solid fa-user"></i></a>
                              
                              <a href="/"> <i title="Hệ Thống Cửa Hàng" class="fa-solid fa-shop"></i></a>
                              <a href="/"> <i title="Sản Phẩm Yêu Thích" class="fa-solid fa-heart"></i></a>
                              <a href="/"> <i title="Giỏ Hàng" class="fa-solid fa-cart-shopping"></i></a>
                         <?php else : ?>
                              <a href="/dangky"> <i title="Cá Nhân" class="fa-solid fa-user"></i></a>
                              <a href="/"> <i title="Hệ Thống Cửa Hàng" class="fa-solid fa-shop"></i></a>
                              <a href="/"> <i title="Sản Phẩm Yêu Thích" class="fa-solid fa-heart"></i></a>
                              <a href="/"> <i title="Giỏ Hàng" class="fa-solid fa-cart-shopping"></i></a>
                         <?php endif ?>
                    </div>

               </div>


               <div class="header-menu">
                    <nav class="header-menu-nav">
                         <ul class="header-menu-ul">
                              <a href="/"> <li>Trang Chủ </li></a>
                              <a href="/tat_ca_san_pham"> <li>Tất cả sản phẩm </li></a>
                              <a href="/gioithieu"><li> Giới thiệu </li></a>

                              <a href="/tintuc"> <li>Tin tức </li></a>
                              <a href="/huong_dan_mua_hang"> <li>Hướng dẫn mua hàng </li></a>
                              <a href="/lienhe"> <li>Liên hệ </li></a>
                         </ul>
                    </nav>
               </div>


              
     </header>