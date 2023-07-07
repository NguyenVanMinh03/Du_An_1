<?php
include("headerall.php");
    ?>  


     <section>
          <div class="section-trangtintuc-icon">
               <img src="../img/icon-title.webp" alt="">
               <h2>Tin Tức</h2>
          </div>


          <div class="section-trangtintuc">
               <div class="section-trangtintuc-left">
               <?php foreach ($blog as $blogg) : ?>
                    <div class="section-trangtintuc-sanpham1">
                         <a href="/chi-tiet-tin-tuc?id=<?=$blogg->id?>">
                              <div><img width="300" height="200px" height="200px" src="../img/<?=$blogg->hinhanh?>" alt=""></div>
                         </a>
                         <div class="section-trangtintuc-name">
                              <a href="/chi-tiet-tin-tuc?id=<?=$blogg->id?>">
                                   <h2><?=$blogg->blog_name?></h2>
                              </a>
                              <p><?=$blogg->blog_noidung?></p>

                         </div>
                         <div class="section-trangtintuc-doctiep">
                              <a href="#">Đọc Tiếp</a>
                         </div> 
                    </div>
                  
                    <?php endforeach ?>
                    

                    



               </div>





               <div class="section-trangtintuc-right">
                    <div class="section-trangtintuc-danhmuc">
                         <div>
                              <a href="/tintuc">Danh Mục Tin Tức</a>
                         </div>
                         <nav>
                              <ul>
                                   <a href="/"><li> Trang Chủ</li> <i class="fa-solid fa-angle-right"></i></a>
                                   <a href="/tat_ca_san_pham"><li> Tất Cả Sản Phẩm </li><i class="fa-solid fa-angle-right"></i></a>
                                   <a href="/gioithieu"><li> Giới Thiệu</li><i class="fa-solid fa-angle-right"></i></a>
                                   <a href="/tintuc"> <li>Tin Tức</li><i class="fa-solid fa-angle-right"></i></a>
                                   <a href="/huong_dan_mua_hang"><li> Hướng Dẫn Mua Hàng</li><i class="fa-solid fa-angle-right"></i></a>
                                   <a href="/lienhe"><li> Liên Hệ</li><i class="fa-solid fa-angle-right"></i></a>


                              </ul>
                         </nav>
                    </div>

                    <div class="section-trangtintuc-noibat" style="margin-top: 30px;">
                         <div class="tintucnoibat">
                              <a href="/tintuc">Tin Tức Nổi Bật</a>
                         </div>
                         
                         <?php foreach ($blog as $blogg) : ?>
                         <div class="section-trangtintuc-khoinho">
                              <a href="/chi-tiet-tin-tuc?id=<?=$blogg->id?>">
                              <div>
                                   <img width="90px" src="../img/<?=$blogg->hinhanh?>" alt="">
                              </div>
                              <p><?=$blogg->blog_name?></p>
                         </a>
                         </div>
                         <?php endforeach ?>
                         <hr>
                         
                         
                         
                    </div>
               </div>



          </div>



     </section>


     <?php
include("footer.php");
    ?>