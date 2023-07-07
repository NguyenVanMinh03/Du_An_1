<?php
include("headerall.php");
    ?>  
          


     <section style="margin-top: 4 0px;">

          <div class="section-trangtintuc">
               <div class="section-trangtintuc-right">
               <div class="section-trangtintuc-danhmuc">
                                        <div>
                                             <a href="/tintuc">Danh Mục Tin Tức</a>
                                        </div>
                                        <nav>
                                             <ul>
                                              
                                                     <a href="/"><li> Trang Chủ </li><i class="fa-solid fa-angle-right"></i></a>
                                                  <a href="/tat_ca_san_pham"><li> Tất Cả Sản Phẩm</li> <i class="fa-solid fa-angle-right"></i></a>
                                                  <a href="/gioithieu"><li> Giới Thiệu</li><i class="fa-solid fa-angle-right"></i></a>
                                                  
                                                  <a href="/tintuc"><li> Tin Tức</li><i class="fa-solid fa-angle-right"></i></a>
                                                  <a href="/huong_dan_mua_hang"><li> Hướng Dẫn Mua Hàng</li><i class="fa-solid fa-angle-right"></i></a>
                                                  <a href="/lienhe"> <li>Liên Hệ</li><i class="fa-solid fa-angle-right"></i></a>


                                             </ul>
                                        </nav>
                                   </div>

                    <div class="section-trangtintuc-noibat" style="margin-top: 30px;">
                         <div class="tintucnoibat">
                              <a href="/tintuc">Tin Tức Nổi Bật</a>
                         </div>
                         
                         <?php foreach ($blogg as $bloggg) : ?>
                         <div class="section-trangtintuc-khoinho">
                              <a href="/chi-tiet-tin-tuc?id=<?=$bloggg->id?>">
                              <div>
                                   <img width="90px" src="../img/<?=$bloggg->hinhanh?>" alt="">
                              </div>
                              <p><?=$bloggg->blog_name?></p>
                         </a>
                         </div>
                         <?php endforeach ?>
                         <hr>
                         
                         
                         
                    </div>
               </div>

               <div class="section-chitiettintuc-right">
                    <div class="section-thanhvien">
                         <div>
                              <h1><?=$blog->blog_name?></h1>
                         </div>
                         <div>
                              <p>Thời Gian : <?=$blog->date?></p>
                              <p><?=$blog->blog_noidung?>
                              <img src="../img/<?=$blog->hinhanh?>" alt="">
                         </div>
                    </div>

                    
               </div>

          </div>
          <div class="section-chitiettintuc-lienquan">
               <div class="section-chinhsach-danhmuc-img">
                    <img width="72" height="43" src="../img/icon-title.webp" alt="Tất cả sản phẩm">
               </div>
               <h3>
                    <a href="/tintuc">Tin Liên Quan</a>
               </h3>
          </div>
          <div class="section-tintuclienquan">

          <?php foreach ($blogg as $bloggg) : ?>
               <div class="section-trangtintuc-sanpham1">
                    <a href="/chi-tiet-tin-tuc?id=<?=$bloggg->id?>">
                         <div><img width="300" height="200px" src="../img/<?=$bloggg->hinhanh?>" alt=""></div>
                    </a>
                    <div class="section-trangtintuc-name">
                         <a href="/chi-tiet-tin-tuc?id=<?=$bloggg->id?>">
                              <h2><?=$bloggg->blog_name?></h2>
                         </a>
                         <p><?=$bloggg->blog_noidung?></p>

                    </div>
                    <div class="section-trangtintuc-doctiep">
                         <a href="#">Đọc Tiếp</a>
                    </div>
               </div>

               <?php endforeach ?>
               

               


          </div>


     </section>


     <?php
include("footer.php");
    ?>