// document.getElementById("quenmatkhau").addEventListener("click", function () {
//   var text = document.getElementById("laymatkhau");
//   if (text.style.display === "none") {
//     text.style.display = "block";
//   } else {
//     text.style.display = "none";
//   }
// });

const dangnhap = () => {
  document.querySelector("#div-quenmatkhau").innerHTML = /*html*/ `
         
 
                         


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
                    


      
           `;
           document.getElementById("quenmatkhau").addEventListener("click", function () {
            var text = document.getElementById("laymatkhau");
            if (text.style.display === "none") {
              text.style.display = "block";
            } else {
              text.style.display = "none";
            }
          });
};
document.querySelector("#quenmatkhau").addEventListener("click", dangnhap);

// const dangky = () => {
//   document.querySelector("#form").innerHTML = /*html*/ `
             
      

//   <form action="" id="form" method="post" enctype="multipart/form-data">
//   <div class="section-namedangnhap">
//        <span>ĐĂNG KÝ</span>
//   </div>
//   <input type="text" placeholder="Họ Tên" name="user_name">
  
//   <br>
//   <br>
//   <input type="email" placeholder="Email" name="user_email">
//   <br>
//   <br>
//   <p>Hình Ảnh</p>
//   <br>
//   <input type="file" name="hinhanh">
//   <br>
//   <br>
//   <input type="number" placeholder="Số Điện Thoại" name="user_phone">
//   <br>
//   <br>
//   <input type="text" name="" id="" placeholder="Địa Chỉ" name="user_address">
//                       <br><br>
//   <input type="password" name="" id="" placeholder="Password" name="password">
//   <br><br>
//   <button type="submit">Đăng Ký</button>
//   <br>
//   <br>

//   </form>
        
//               `;
             
// };
// document.querySelector("#dangky").addEventListener("click", dangky);
