<?php
include("headerall.php");
?>





<section style="margin-top: 40px;">

     <div class="section-chitietsanpham">

          <div class="section-chitietsanpham-tensanpham">

               <span><?= $product->product_name ?></span>

          </div>

          <hr style="margin: 20px 0;">

          <div class="section-chitietsanpham-khoi1">
               <div class="section-chitietsanpham-khoi1-left">
                    <div class="section-chitietsanpham-khoi1-khoi1">
                         <div class="section-chitietsanpham-khoi1-khoi1-left">
                              <div>
                                   <img src="../img/<?= $product->hinhanh ?>" alt="">
                              </div>
                              <div class="section-chitietsanpham-khoi1-khoi1-thontincoban">
                                   <span>
                                        THÔNG TIN CƠ BẢN</span>
                                   <p>Phù hợp cho bình cổ siêu rộng 3 chức năng: hâm nóng, giữ nóng, tiệt trùng Hâm
                                        nóng đều, nhanh chóng</p>
                              </div>
                         </div>

                         <div class="section-chitietsanpham-khoi1-khoi1-right">

                              <div class="section-chitietsanpham-khoi1-khoi1-thuonghieu">
                                   <span><Strong>Thương Hiệu :</Strong><?= $product->thuonghieu ?></span>
                                   <span><Strong>Tình Trạng :</Strong><?= $product->tinhtrang ?></span>
                                   <span><Strong>Mã Sản Phẩm :</Strong><?= $product->masp ?></span>
                              </div>
                              <div class="section-chitietsanpham-khoi1-khoi1-gia">
                                   <span><?= $product->price ?>₫ </span>
                                   <del><?= $product->price_km ?>₫</del>
                              </div>
                              <div class="section-chitietsanpham-khoi1-khoi1-soluong">
                                   <span>Số Lượng :</span>
                                   <br>
                                   <input type="number" name="" id="">

                              </div>
                              <div class="section-chitietsanpham-khoi1-khoi1-giohang">
                                   <a href="#">Thêm Vào Giỏ Hàng</a>
                              </div>

                              <div class="section-chitietsanpham-khoi1-khoi1-khuyenmai">


                                   <div class="khuyen-mai">
                                        <div class="title">
                                             <img width="64" height="64" src="//bizweb.dktcdn.net/100/476/144/themes/895508/assets/giftbox.png?1687487251955" alt="vouver">
                                             <span>Khuyến mãi đặc biệt !!!</span>
                                        </div>
                                        <div class="content">
                                             <ul>


                                                  <li><img width="20" height="20" src="//bizweb.dktcdn.net/100/476/144/themes/895508/assets/km_product1.png?1687487251955" alt="Áp dụng Phiếu quà tặng/ Mã giảm giá theo ngành hàng.">Áp
                                                       dụng Phiếu quà tặng/ Mã giảm giá theo ngành hàng.</li>



                                                  <li><img width="20" height="20" src="//bizweb.dktcdn.net/100/476/144/themes/895508/assets/km_product2.png?1687487251955" alt="Giảm giá 10% khi mua từ 5 sản phẩm trở lên.">Giảm
                                                       giá 10% khi mua từ 5 sản phẩm trở lên.</li>



                                                  <li><img width="20" height="20" src="//bizweb.dktcdn.net/100/476/144/themes/895508/assets/km_product3.png?1687487251955" alt="Tặng 100.000₫ mua hàng tại website thành viên Dola Baby, áp dụng khi mua Online tại Hồ Chí Minh và 1 số khu vực khác.">Tặng
                                                       100.000₫ mua hàng tại website thành viên Dola Baby

                                             </ul>
                                        </div>
                                   </div>


                              </div>

                              <div class="section-chitietsanpham-khoi1-khoi1-muangay">
                                   <button type="submit">Mua Ngay</button>
                              </div>
                         </div>

                    </div>
               </div>




               <div class="section-chitietsanpham-khoi1-right">

                    <div class="section-chitietsanpham-khoi1-namecuahang">
                         Chính sách cửa hàng
                    </div>
                    <div class="section-chitietsanpham-khoi1-chinhsachcuahang">

                         <div class="section-chitietsanpham-khoi1-chinhsachcuahang-khoi1">
                              <a href="./tat-ca-san-pham.html" title="Miễn phí vẫn chuyển">
                                   <img width="40" height="40" src="//bizweb.dktcdn.net/100/476/144/themes/895508/assets/chinhsach_1.png?1687487251955" alt="Miễn phí vẫn chuyển">
                                   <div class="">
                                        <span>Miễn phí vẫn chuyển</span>
                                        <br>
                                        <p>Cho tất cả đơn hàng trong nội thành Hồ Chí
                                             Minh</p>
                                   </div>
                              </a>
                         </div>


                         <div class="section-chitietsanpham-khoi1-chinhsachcuahang-khoi1">
                              <a href="./tat-ca-san-pham.html" title="Miễn phí đổi - trả">
                                   <img width="40" height="40" src="//bizweb.dktcdn.net/100/476/144/themes/895508/assets/chinhsach_2.png?1687487251955" alt="Miễn phí đổi - trả">
                                   <div class="">
                                        <span>Miễn phí đổi - trả</span>
                                        <br>
                                        <p>Đối với sản phẩm lỗi sản xuất hoặc vận chuyển</p>
                                   </div>
                              </a>
                         </div>


                         <div class="section-chitietsanpham-khoi1-chinhsachcuahang-khoi1">
                              <a href="./tat-ca-san-pham.html" title="Ưu đãi thành viên">
                                   <img width="40" height="40" src="//bizweb.dktcdn.net/100/476/144/themes/895508/assets/chinhsach_3.png?1687487251955" alt="Ưu đãi thành viên">
                                   <div class="">
                                        <span>Ưu đãi thành viên</span>
                                        <br>
                                        <p>Đăng ký thành viên để được ưu đãi lớn</p>
                                   </div>
                              </a>
                         </div>


                         <div class="section-chitietsanpham-khoi1-chinhsachcuahang-khoi1">
                              <a href="./tat-ca-san-pham.html" title="Ưu đãi combo">
                                   <img width="40" height="40" src="//bizweb.dktcdn.net/100/476/144/themes/895508/assets/chinhsach_4.png?1687487251955" alt="Ưu đãi combo">
                                   <div class="">
                                        <span>Ưu đãi combo</span>
                                        <br>
                                        <p>Mua theo combo sẽ tiết kiệm nhiều hơn
                                        </p>
                                   </div>
                              </a>
                         </div>

                    </div>

               </div>
          </div>



          <div class="section-chitietsanpham-khoi2">
               <div class="container content-pro">
                    <div class="row">
                         <div class="col-12 col-lg-8 col-xl-9">

                              <div class="product-tab e-tabs not-dqtab" id="tab-product">
                                   <ul class="tabs tabs-title clearfix">

                                        <li class="tab-link active" data-tab="#tab-1">
                                             <h3 id="nutthem2">Mô tả sản phẩm</h3>
                                        </li>


                                        <li class="tab-link" data-tab="#tab-2">
                                             <h3 id="nutthem">Hướng dẫn mua hàng</h3>
                                        </li>


                                   </ul>

                                   <div class="tab-float" id="aa">

                                        <div id="tab-1" class="tab-content active content_extab">
                                             <div class="rte product_getcontent">

                                                  <div class="ba-text-fpt" style="font-weight: 500;     color: #676565;">
                                                       <p><?= $product->detail ?></p>
                                                  </div>



                                             </div>
                                        </div>




                                   </div>

                              </div>

                         </div>

                         <div class="section-trangtintuc">
                              <div class="section-trangtintuc-right">
                                   <div class="section-trangtintuc-danhmuc">
                                        <div>
                                             <a href="/tintuc">Danh Mục Tin Tức</a>
                                        </div>
                                        <nav>
                                             <ul>

                                                  <a href="/">
                                                       <li> Trang Chủ </li><i class="fa-solid fa-angle-right"></i>
                                                  </a>
                                                  <a href="/tat_ca_san_pham">
                                                       <li> Tất Cả Sản Phẩm</li> <i class="fa-solid fa-angle-right"></i>
                                                  </a>
                                                  <a href="/gioithieu">
                                                       <li> Giới Thiệu</li><i class="fa-solid fa-angle-right"></i>
                                                  </a>

                                                  <a href="/tintuc">
                                                       <li> Tin Tức</li><i class="fa-solid fa-angle-right"></i>
                                                  </a>
                                                  <a href="/huong_dan_mua_hang">
                                                       <li> Hướng Dẫn Mua Hàng</li><i class="fa-solid fa-angle-right"></i>
                                                  </a>
                                                  <a href="/lienhe">
                                                       <li>Liên Hệ</li><i class="fa-solid fa-angle-right"></i>
                                                  </a>


                                             </ul>
                                        </nav>
                                   </div>

                                   <div class="section-trangtintuc-noibat" style="margin-top: 30px;">
                                        <div class="tintucnoibat">
                                             <a href="/tintuc">Tin Tức Nổi Bật</a>
                                        </div>
                                        <?php foreach ($blog as $blogg) : ?>
                                             <div class="section-trangtintuc-khoinho">
                                                  <a href="/chi-tiet-tin-tuc?id=<?= $blogg->id ?>">
                                                       <div>
                                                            <img width="90px" src="../img/<?= $blogg->hinhanh ?>" alt="">
                                                       </div>
                                                       <p><?= $blogg->blog_name ?></p>
                                                  </a>
                                             </div>
                                        <?php endforeach ?>
                                        <hr>



                                   </div>
                              </div>



                         </div>



                    </div>
                    <div class="section-binhluan-chitiettintuc">
                         <span>VIẾT BÌNH LUẬN CỦA BẠN</span>
                         <form action="" method="post" enctype="multipart/form-data">
                              <br>
                              <div>
                              <?php if (isset($_SESSION['auth'])) : ?>
                                   <input type="hidden" placeholder="Họ & Tên" name="user_id" value="<?php echo ($_SESSION["auth"]->id) ?>">
                                  
                                   <?php else : ?>
                                      
                                        <?php endif ?>
                                   <input type="hidden" placeholder="Họ & Tên" name="product_id" value="<?= $product->id ?>">
                                   <input type="text" placeholder="Họ & Tên" name="hoten">
                                   <input type="email" placeholder="Email" name="email">

                              </div>

                              <br>
                              <textarea name="comment_noidung" id="" cols="0" rows="10" placeholder="Nội Dung" required></textarea>
                              <br>
                              <Button type="submit">Gửi Bình Luận</Button>
                         </form>
                    </div>
                    <span class="thongtinbinhluan">Thông Tin Bình Luận</span>

                   
                         <div class="section_comment_noidung">
                              <?php foreach ($comment as $commentt) : ?>
                                   <h3><?= $commentt->hoten ?></h3>
                                   <span>
                                        <p>Ngày: <?= $commentt->date ?> </p>
                                        <?php foreach ($user as $userr ) : ?>
                                        <p value=""><?= ($userr->id === $commentt->user_id)? $userr->user_name:"" ?></p>
                                        <?php endforeach ?>
                                   </span>
                                   <p><?= $commentt->comment_noidung ?></p>
                                   <p><a href="/delete_comment_ctsp?id=<?=$commentt->id?>" onclick="return confirm('Bạn Chắc Chắn Muốn Xóa Bình Luận Này')">Xóa</a></p>
                                   <hr style="margin-top: 8px;">
                              <?php endforeach ?>
                         </div>
                    


               </div>

          </div>

          <div class="section-chitietsanpham-khoi3">
               <div class="section-sanpham">
                    <div class="section-logo-chitietsanpham">

                         <img src="../img/icon-title.webp" alt="">

                         <h3>Sản Phẩm Liên Quan</h3>

                    </div>


                    <div class="section-sanpham-tatca">

                         <div class="section-khoisanpham">
                              <?php foreach ($producttt as $productttt) : ?>
                                   <div class="section-khoisanpham-1">
                                        <a href="/chi-tiet-san-pham?id=<?= $productttt->id ?>">
                                             <div>
                                                  <img width="210px" height="230px" src="../img/<?= $productttt->hinhanh ?>" alt="">
                                             </div>
                                             <div class="hover-sanpham">
                                                  <div>
                                                       <img width="210px" height="230px" src="../img/102.webp" alt="">
                                                  </div>
                                             </div>
                                             <span id="name-sanpham"><?= $productttt->product_name ?></span>
                                             <div class="section-sanpham-price">
                                                  <span><?= $productttt->price ?>₫</span>
                                                  <del><?= $productttt->price_km ?>₫</del>
                                             </div>
                                        </a>
                                   </div>

                              <?php endforeach ?>
                         </div>

                    </div>

               </div>
          </div>
     </div>


</section>


<?php
include("footer.php");
?>