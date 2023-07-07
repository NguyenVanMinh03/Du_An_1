<?php
include("headerall.php");
    ?>     
        

     <section>

          <div class="section-dangnhap">
               <div class="section-dangnhap-left">
                    <div class="section-dangnhap-dangky">
                         <ul>
                              <li  style="border-bottom: 2px solid #ec2154;
                    padding-bottom: 15px;"><a href="/dangky"> ĐĂNG KÝ</a></li>
                              <li  style="border-bottom: 2px solid #ec2154;
                              padding-bottom: 15px;"><a href="/dangnhap">ĐĂNG NHẬP</a></li>
                         </ul>


                    </div>
                    <form action="" id="form" method="post" enctype="multipart/form-data">
     <div class="section-namedangnhap">
          <span>ĐĂNG KÝ</span>
     </div>
     <input type="text" placeholder="Họ Tên" name="user_name">
     
     <br>
     <br>
     <input type="email" placeholder="Email" name="user_email">
     <br>
     <br>
     <p>Hình Ảnh</p>
     <br>
     <input type="file" name="hinhanh">
     <br>
     <br>
     <input type="number" placeholder="Số Điện Thoại" name="user_phone">
     <br>
     <br>
     <input type="text"  id="" placeholder="Địa Chỉ" name="user_address">
                         <br><br>
     <input type="password"  id="" placeholder="Password" name="password">
     <br><br>
     <button type="submit">Đăng Ký</button>
     <br>
     <br>

     </form>
               </div>

               <div class="section-dangnhap-right">
                    <img src="../img/login-banner.webp" alt="">
               </div>
               <div>



     </section>

     <?php
include("footer.php");
    ?>