

const them = () => {
  document.querySelector(".tab-float").innerHTML = /*html*/ `
     <div class="section-thanhvien">
     <div >
          <h1 ><a href="#">Hướng dẫn mua hàng</a></h1>
     </div>
     <div >
          <p><strong>Bước 1:</strong>&nbsp;Truy cập website và lựa chọn sản phẩm&nbsp;cần mua</p>
<p><strong>Bước 2:</strong>&nbsp;Click và sản phẩm muốn mua, màn hình hiển thị ra pop up với các lựa chọn sau</p>
<p>Nếu bạn muốn tiếp tục mua hàng: Bấm vào phần tiếp tục mua hàng để lựa chọn thêm sản phẩm vào giỏ hàng</p>
<p>Nếu bạn muốn xem giỏ hàng để cập nhật sản phẩm: Bấm vào xem giỏ hàng</p>
<p>Nếu bạn muốn đặt hàng và thanh toán cho sản phẩm này vui lòng bấm vào: Đặt hàng và thanh toán</p>
<p><strong>Bước 3:</strong>&nbsp;Lựa chọn thông tin tài khoản thanh toán</p>
<p>Nếu bạn đã có tài khoản vui lòng nhập thông tin tên đăng nhập là email và mật khẩu vào mục đã có tài khoản trên hệ thống</p>
<p>Nếu bạn chưa có tài khoản và muốn đăng ký tài khoản vui lòng điền các thông tin cá nhân để tiếp tục đăng ký tài khoản. Khi có tài khoản bạn sẽ dễ dàng theo dõi được đơn hàng của mình</p>
<p>Nếu bạn muốn mua hàng mà không cần tài khoản vui lòng nhấp chuột vào mục đặt hàng không cần tài khoản</p>
<p><strong>Bước 4:</strong>&nbsp;Điền các thông tin của bạn để nhận đơn hàng, lựa chọn hình thức thanh toán và vận chuyển cho đơn hàng của mình</p>
<p><strong>Bước 5:</strong>&nbsp;Xem lại thông tin đặt hàng, điền chú thích và gửi đơn hàng</p>
<p>Sau khi nhận được đơn hàng bạn gửi chúng tôi sẽ liên hệ bằng cách gọi điện lại để xác nhận lại đơn hàng và địa chỉ của bạn.</p>
<p>Trân trọng cảm ơn.</p>
     </div>
</div>
     `;
};
document.querySelector("#nutthem").addEventListener("click", them);

const them2 = () => {
  document.querySelector(".tab-float").innerHTML = /*html*/ `
    

     <div id="tab-1" class="tab-content active content_extab">
          <div class="rte product_getcontent">

               <div class="ba-text-fpt"
                    style="font-weight: 500;     color: #676565;">
                    <p>Nhiệt độ phù hợp cho thức ăn của bé là yếu tố quan
                         trọng ảnh hưởng đến cảm giác ngon miệng và độ dinh
                         dưỡng trong mỗi bữa ăn. Đến từ thương hiệu Hàn
                         Quốc nổi tiếng máy hâm sữa cổ rộng Fatzbaby
                         FB3027SL sẽ mang đến giải pháp đảm bảo yếu tố quan
                         trọng ấy cho những bữa ăn của bé. Sản phẩm mang
                         thiết kế cải tiến, kiểu dáng độc đáo, phù hợp cho
                         bình sữa cổ siêu rộng. Fatzbaby mang đến 3 chế độ
                         sử dụng: hâm nóng, giữ nóng và tiệt trùng bình
                         sữa, hứa hẹn sẽ là người trợ thủ đắc lực hỗ trợ mẹ
                         chăm sóc bé trong những năm tháng đầu đời.</p>
               </div>



          </div>
     </div>


     `;
};
document.querySelector("#nutthem2").addEventListener("click", them2);



// const quenmatkhau = () => {
//   document.querySelector("#div-quenmatkhau").innerHTML = /*html*/ `
       
   
//      <div id="div-quenmatkhau">
//       <br>
//      <br>
//      <br>
//      <input type="password" name="" id="" placeholder="Email">
//      <br><br>
//      <button type="submit">Lấy Lại Mật Khẩu</button> 
//      </div>
   
   
//         `;
// };
// document.querySelector("#quenmatkhau").addEventListener("click", quenmatkhau);



