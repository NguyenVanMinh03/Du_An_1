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
                              padding-bottom: 15px;"><a href="/dangnhap"> ĐĂNG NHẬP</a></li>
                         </ul>


                    </div>
                    <form action="" id="form" method="post" enctype="multipart/form-data">
                    <div class="section-namedangnhap">
                              <span>ĐĂNG NHẬP</span>
                         </div>

                         <input type="email" name="user_email" placeholder="Email">
                         <br>
                         <br>
                         <input type="password" name="password"  placeholder="Password">
                         <br><br>
                         
                         
                         <button type="submit">Đăng Nhập</button>
                         <br>
                         <br>


                         <div id="div-quenmatkhau">
                              <div id="quenmatkhau">
                                   <span> Quên Mật Khẩu ?</span>
                              </div>
                              <br><br>
                              <br>
                              <div style="display: none;" id="laymatkhau">
                                   <input type="password" name="" id="" placeholder="Email">
                                   <br><br>
                                   <button type="submit">Lấy Lại Mật Khẩu</button> 
                                   </div>

                         </div>
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