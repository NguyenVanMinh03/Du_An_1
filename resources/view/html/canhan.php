
<?php
include("headerall.php");
    ?>         





     <section>

<div class="section_canhan">

     <div class="section_canhan_left">
          <div class="section_canhan_left_anhcanhan">
               <img width="50%" height="50%" src="../../../public/img/<?php echo($_SESSION["auth"]->hinhanh)?>" alt="">
          </div>
          <div class="section_canhan_left_thongtin">
               <span>Xin Chào !</span>
               <p><?php echo($_SESSION["auth"]->user_name)?></p>

               <a href="/dangxuat">Đăng Xuất</a>
          </div>
          <div class="section_canhan_left_thongtinadmin">
               <ul>
               <?php if (isset($_SESSION['auth'])) : ?>
                    <li><a href="/canhan">Tài Khoản Của Tôi</a></li>
                    <li><a href="#">Đơn Hàng Của Tôi</a></li>
                    <?php if ($_SESSION['auth']->role=="1") : ?>
                    <li><a href="/tongquan_admin">Trang Quản Trị</a></li>
                    <?php endif ?>
                    <?php else : ?>

                         <li><a href="/canhan">Tài Khoản Của Tôi</a></li>
                    <li><a href="#">Đơn Hàng Của Tôi</a></li>
                    
                         <?php endif ?>
               </ul>
          </div>
     </div>

     <div class="section_canhan_right">
          <div class="section_canhan_right_thongtincanhan">
               <h2>Thông Tin Cá Nhân</h2>
               <a href="/edit_canhan?id=<?php echo($_SESSION["auth"]->id)?>">Sửa Thông Tin</a>
          </div>
          <hr style="margin: 10px 0;">
          <div class="section_canhan_right_tincanhan">
               <span>Họ Tên : <?php echo($_SESSION["auth"]->user_name)?></span>
               <span>Địa Chỉ Email : <?php echo($_SESSION["auth"]->user_email)?></span>
          </div>
     </div>
    
</div>
        
    
         

     </section>


     <?php
include("footer.php");
    ?>