<?php
include("headerall.php");
    ?>  

         


     <section>


          <div class="section-tatcasanpham-banner">
               <img width="660x" src="../img/banner_col_1.webp" alt="">
               <img width="660px" src="../img/banner_col_2.webp" alt="">
          </div>

          <div class="section-sanpham">
               <div class="section-logo-tatcasanpham">

                    <img src="../img/icon-title.webp" alt="">

                    <h3>Tất Cả Sản Phẩm</h3>

               </div>
               <div class="section-khoi-tatcasanpham">
                    <div class="section-khoi-tatcasanpham-danhmuc">
                         <nav>
                         <?php foreach ($category as $cate) : ?>
                              <a href="/danhmuc?id=<?=$cate->id?>"><?=$cate->cate_name?></a>
                              
                              <?php endforeach ?>
                         </nav>
                    </div>




               </div>

               <div class="section-sanpham-tatca">

                    <div class="section-khoisanpham">
                    <?php foreach ($product as $pro) : ?>
                         <div class="section-khoisanpham-1">
                              <a href="/chi-tiet-san-pham?id=<?=$pro->id?>">
                                   <div>
                                        <img width="210px" height="230px" src="../img/<?=$pro->hinhanh?>" alt="">
                                   </div>
                                   <div class="hover-sanpham">
                                        <div>
                                             <img width="210px" height="230px" src="../img/102.webp" alt="">
                                        </div>
                                   </div>
                                   <span id="name-sanpham"><?=$pro->product_name?></span>
                                   <div class="section-sanpham-price">
                                        <span><?=$pro->price?></span>
                                        <del><?=$pro->price_km?></del>
                                   </div>
                              </a>
                         </div>
                         <?php endforeach ?>
                         
                    </div>

               </div>

          </div>
     </section>

     <?php
include("footer.php");
    ?>