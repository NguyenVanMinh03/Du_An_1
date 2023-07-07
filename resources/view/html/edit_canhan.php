<?php
include("headerall.php");
    ?>  
        
         





     <section>

<div class="section_canhan">
     <div class="section_canhan_left">
          <div class="section_canhan_left_anhcanhan">
          <img width="50%" height="50%" src="../../../public/img/101.webp" alt="">
          </div>
          <div class="section_canhan_left_thongtin">
               <!-- <span>Xin Chào !</span> -->
               <p>Nguyễn Văn Minh</p>

               <a href="/dangxuat">Đăng Xuất</a>
          </div>
          <div class="section_canhan_left_thongtinadmin">
               <ul>
                    <li><a href="/canhan">Tài Khoản Của Tôi</a></li>
                    <li><a href="#">Đơn Hàng Của Tôi</a></li>
                    <li><a href="/tongquan_admin">Trang Quản Trị</a></li>
               </ul>
          </div>
     </div>

     <div class="section_canhan_right">
          <div class="section_canhan_right_thongtincanhan">
               <h2>Sửa Tin Cá Nhân</h2>
               
          </div>
          <hr style="margin: 10px 0;">
          <div class="section_canhan_right_form_sua">
               <form action="" method="post" enctype="multipart/form-data">
               <input type="hidden" name="id" id="" value="<?=$user->id?>">
                    <span>Họ Tên:</span>
                    <br>
                    <input type="text" name="user_name" id="" value="<?=$user->user_name?>">
                    <br><br>
                    <span>Email:</span>
                    <br>
                    <input type="email" name="user_email"value="<?=$user->user_email?>">
                    <br><br>
                    <span>Hình Ảnh:</span>
                    <br>
                    <img width="20%" src="../img/<?=$user->hinhanh?>" alt="">
                    <br>
                    <input type="file" name="hinhanh">
                    <br><br>
                    <span>Số Điện Thoại:</span>
                    <br>
                    <input type="number" name="user_phone" value="<?=$user->user_phone?>">
                    <br><br>
                    <span>Địa Chỉ:</span>
                    <br>
                    <input type="text" value="<?=$user->user_address?>" name="user_address">
                    <br><br>
                    <span>Password:</span>
                    <br>
                    <input type="password" name="password" value="<?=$user->password?>">
                    <br><br>
                    <br>
                    <button type="submit">Lưu Thông Tin</button>
               </form>
          </div> 
     </div>
</div>
        
    
         

     </section>


          <?php
include("footer.php");
    ?>