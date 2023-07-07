<?php
include("header.php");
    ?>


     <section>
          <div class="section-chinhsach">
               <a href="/tat_ca_san_pham" title="Miễn phí vẫn chuyển">
                    <img width="40" height="40" src="../img/chinhsach_1.webp" alt="Miễn phí vẫn chuyển">
                    <div class="text">
                         <p class="title">Miễn phí vẫn chuyển</p>
                         <p class="des">Cho tất cả đơn hàng trong nội thành Hồ Chí Minh</p>
                    </div>
               </a>

               <a href="/tat_ca_san_pham" class="swiper-slide" title="Miễn phí đổi - trả">
                    <img width="40" height="40" src="//bizweb.dktcdn.net/100/476/144/themes/895508/assets/chinhsach_2.png?1687487251955" alt="Miễn phí đổi - trả">
                    <div class="text">
                         <p class="title">Miễn phí đổi - trả</p>
                         <p class="des">Đối với sản phẩm lỗi sản xuất hoặc vận chuyển</p>
                    </div>
               </a>

               <a href="/tat_ca_san_pham" class="swiper-slide" title="Ưu đãi thành viên">
                    <img width="40" height="40" src="//bizweb.dktcdn.net/100/476/144/themes/895508/assets/chinhsach_3.png?1687487251955" alt="Ưu đãi thành viên">
                    <div class="text">
                         <p class="title">Ưu đãi thành viên</p>
                         <p class="des">Đăng ký thành viên để được ưu đãi lớn</p>
                    </div>
               </a>

               <a href="/tat_ca_san_pham" class="swiper-slide" title="Ưu đãi combo">
                    <img width="40" height="40" src="//bizweb.dktcdn.net/100/476/144/themes/895508/assets/chinhsach_4.png?1687487251955" alt="Ưu đãi combo">
                    <div class="text">
                         <p class="title">Ưu đãi combo</p>
                         <p class="des">Mua theo combo sẽ tiết kiệm nhiều hơn
                         </p>
                    </div>
               </a>
          </div>

          <div class="section-chinhsach-danhmuc">
               <div class="section-chinhsach-danhmuc-img">
                    <img width="72" height="43" src="../img/icon-title.webp" alt="Tất cả sản phẩm">
               </div>
               <h3>
                    <a href="/tat_ca_san_pham" title="Danh mục nổi bật">DANH MỤC NỔI BẬT</a>
               </h3>

               <div class="section-chinhsach-danhmuc1">
                    <div class="swiper-slide">
                         <a class="image" href="/tat_ca_san_pham" title="Đồ dùng cho bé">
                              <img width="315" height="315" src="../img/danhmuc_1.webp" alt="Đồ dùng cho bé" />

                              <h4>
                                   Đồ dùng cho bé
                              </h4>
                         </a>
                    </div>

                    <div class="swiper-slide">
                         <a class="image" href="/tat_ca_san_pham" title="Thời trang cho bé">
                              <img width="315" height="315" src="../img/danhmuc_2.webp" alt="Thời trang cho bé" />

                              <h4>
                                   Thời trang cho bé
                              </h4>
                         </a>
                    </div>

                    <div class="swiper-slide">
                         <a class="image" href="/tat_ca_san_pham" title="Sức khỏe cho bé">
                              <img width="315" height="315" src="../img/danhmuc_3.webp" alt="Sức khỏe cho bé" />

                              <h4>
                                   Sức khỏe cho bé
                              </h4>
                         </a>
                    </div>

                    <div class="swiper-slide">
                         <a class="image" href="/tat_ca_san_pham" title="Dành cho mẹ bầu">
                              <img width="315" height="315" src="../img/danhmuc_4.webp" alt="Dành cho mẹ bầu" />

                              <h4>
                                   Dành cho mẹ bầu
                              </h4>
                         </a>
                    </div>
               </div>
          </div>
          <div class="section-banner1">
               <div class="section-banner1-img1">
                    <img src="../img/banner1_1.webp" alt="">
               </div>
               <div class="section-banner1-img2">
                    <img src="../img/banner1_2.webp" alt="">
               </div>
          </div>
          <div class="section-sanpham">
               <div class="section-chinhsach-danhmuc-img">
                    <img width="72" height="43" src="../img/icon-title.webp" alt="Tất cả sản phẩm">
               </div>
               <h3>
                    <a href="/tat_ca_san_pham" title="Danh mục nổi bật">Tất Cả Sản Phẩm</a>
               </h3>

               <div class="section-sanpham-tatca">
                    <div class="section-sanpham-tatca-left">
                         <div class="section-sanpham-tatca-danhmucleft">
                              <?php foreach ($category as $cate) : ?>
                                   <div class="section-sanpham-tatca-danhmucleft1">
                                        <a href="/danhmuchome?id=<?= $cate->id ?>">
                                             <div>
                                                  <img src="../img/<?= $cate->hinhanh ?>" alt="">
                                             </div>
                                             <span><?= $cate->cate_name ?></span>
                                        </a>
                                   </div>
                              <?php endforeach ?>



                         </div>


                         <div class="section-khoisanpham">
                              <?php foreach ($product as $pro) : ?>
                                   <div class="section-khoisanpham-1">
                                        <a href="/chi-tiet-san-pham?id=<?= $pro->id ?>">
                                             <div>
                                                  <img width="210px" height="230px" src="../img/<?= $pro->hinhanh ?>" alt="">
                                             </div>
                                             <div class="hover-sanpham">
                                                  <div>
                                                       <img width="210px" height="230px" src="../img/102.webp" alt="">
                                                  </div>
                                             </div>
                                             <span id="name-sanpham"><?= $pro->product_name ?></span>
                                             <div class="section-sanpham-price">
                                                  <span><?= $pro->price ?>₫</span>
                                                  <del><?= $pro->price_km ?>₫</del>
                                             </div>
                                        </a>
                                   </div>
                              <?php endforeach ?>





                         </div>

                    </div>


                    <div class="section-sanpham-tatca-right">
                         <div class="header-banner-left">
                              <div>
                                   <a href="/tat_ca_san_pham">Tất Cả Sản Phẩm</a>
                              </div>
                              <nav>
                                   <ul>
                                        <?php foreach ($category as $cate) : ?>
                                             <a href="/danhmuchome?id=<?= $cate->id ?>"><li> <?= $cate->cate_name ?> </li><i class="fa-solid fa-angle-right"></i></a>

                                        <?php endforeach ?>

                                   </ul>
                              </nav>
                         </div>

                         <div class="section-banner1-img1" style="margin-top: 20px;">
                              <img width="300px" src="../img/banner_tab.webp" alt="">
                         </div>
                    </div>
               </div>
               <div class="section-sanpham-xemtatca">
                    <a href="/tat_ca_san_pham">Xem Tất Cả</a>
               </div>

          </div>
          <div class="section-tintuc">
               <div class="section-chinhsach-danhmuc-img">
                    <img width="72" height="43" src="../img/icon-title.webp" alt="Tất cả sản phẩm">
               </div>
               <h3>
                    <a href="/tintuc">Tin Tức Mới Nhất</a>
               </h3>


               <div class="section-tintuc-tatca">
                    <?php foreach ($blog as $blogg) : ?>
                         <div class="section-tintuc-khoi1">
                              <a href="/chi-tiet-tin-tuc?id=<?= $blogg->id ?>">
                                   <div>
                                        <img width="410" height="260" src="../img/<?= $blogg->hinhanh ?>" alt="">
                                   </div>
                                   <div class="conten-tintuc">
                                        <h4>
                                             <a href="/chi-tiet-tin-tuc?id=<?= $blogg->id ?>"><?= $blogg->blog_name ?></a>
                                        </h4>
                                        <p><?= $blogg->blog_noidung ?>
                                        </p>

                                        <a href="/chi-tiet-tin-tuc?id=<?= $blogg->id ?>" title="Đọc tiếp">Đọc tiếp</a>
                                   </div>
                              </a>
                         </div>
                    <?php endforeach ?>


               </div>

          </div>
          <div class="section-thuonghieu">
               <div class="section-chinhsach-danhmuc-img">
                    <img width="72" height="43" src="../img/icon-title.webp" alt="Tất cả sản phẩm">
               </div>
               <h3>
                    <a href="/tat_ca_san_pham">Thương Hiệu Nổi Bật</a>
               </h3>


               <div class="section-thuonghieu-img">
                    <a href="/tat_ca_san_pham"> <img src="../img/thuonghieu_1.webp" alt=""></a>
                    <a href="/tat_ca_san_pham"> <img src="../img/thuonghieu_2.webp" alt=""></a>
                    <a href="/tat_ca_san_pham"> <img src="../img/thuonghieu_3.webp" alt=""></a>
                    <a href="/tat_ca_san_pham"> <img src="../img/thuonghieu_4.webp" alt=""></a>
                    <a href="/tat_ca_san_pham"> <img src="../img/thuonghieu_5.webp" alt=""></a>
                    <a href="/tat_ca_san_pham"> <img src="../img/thuonghieu_6.webp" alt=""></a>
                    <a href="/tat_ca_san_pham"> <img src="../img/thuonghieu_7.webp" alt=""></a>
                    <a href="/tat_ca_san_pham"> <img src="../img/thuonghieu_8.webp" alt=""></a>
                    <a href="/tat_ca_san_pham"> <img src="../img/thuonghieu_9.webp" alt=""></a>
                    <a href="/tat_ca_san_pham"> <img src="../img/thuonghieu_10.webp" alt=""></a>
               </div>
          </div>
     </section>

    <?php
include("footer.php");
    ?>