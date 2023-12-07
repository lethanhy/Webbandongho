<?php 
require_once "config/db.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $ten =$_POST["ten"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $sanpham = $_POST["sanpham"];
    $tinnhan = $_POST["tinnhan"];

    $result = mysqli_query($connect,"INSERT INTO `contacts`(ten,phone,email,sanpham,tinnhan) values('$ten','$phone','$email','$sanpham','$tinnhan')");

    echo '<script language="javascript">alert("Gửi thành công!"); window.location="contact.php";</script>';






}
require_once "header.php";


?>
<link rel="stylesheet" href="contact.css">
<style>
    .text{
        margin-top:8rem;
    }
</style>

    <!---contact-->
    <div class="container">
        <h1 class="text">Liên hệ với chúng tôi</h1>
        <p>Chúng tôi rất vui lòng trả lời các câu hỏi của bạn và giúp bạn có trải nghiệm tốt nhất.<br> Hãy liên lạc với chúng tôi.</p>
        <div class="contact-box">
            <div class="contact-left">
                <h3>Gửi phản hồi của bạn</h3>
                <form action="" method="POST">
                    <div class="input-row">
                        <div class="input-group">
                            <label for="">Tên</label>
                            <input type="text" placeholder="Thanh Y" name="ten">
                        </div>
                        <div class="input-group">
                            <label for="">Số điện thoại</label>
                            <input type="text" placeholder="+123456789" name="phone">
                        </div>
                    </div>
                    <div class="input-row">
                        <div class="input-group">
                            <label for="">Email</label>
                            <input type="email" placeholder="lethanhy107@gmail.com" name="email">
                        </div>
                        <div class="input-group">
                            <label for="">Sản phẩm</label>
                            <input type="text" placeholder="Product demo" name="sanpham">
                        </div>
                    </div>


                    <label for="">Lời nhắn</label>
                    <textarea id="" cols="30" rows="5" placeholder="Your massage" name="tinnhan"></textarea>

                    <button class="nut" type="submit" name="Gui">Gửi</button>
                </form>
            </div>
            <div class="contact-right">
                <h3>Thông tin của chúng tôi</h3>

                <table>
                    <tr>
                        <td>Email</td>
                        <td>contactus@example.com</td>
                    </tr>
                    <tr>
                        <td>Số điện thoại</td>
                        <td>+123456789</td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td>#123 long hòa</td>
                    </tr>
                </table>


            
            </div>
        </div>
    </div>


   


    <footer>
    <div class="footer-container ">


        <!--logo-container-->
        <div class="footer-logo">
            <a href="#" class="text-decoration-none">Y STORE</a>

            <!--social-->
            <div class="footer-social">
                <a href="#" class="text-decoration-none"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-decoration-none"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-decoration-none"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-decoration-none"><i class="fab fa-youtube"></i></a>
           </div>


        </div>


        <!---links-->
        <div class="footer-links">
            <strong>Sản Phẩm</strong>
            <ul>
                <li><a href="#" class="text-decoration-none">Đồng hồ Apple</a></li>
                <li><a href="#" class="text-decoration-none">Đồng hồ Iphone</a></li>
                <li><a href="#" class="text-decoration-none">Phổ biến</a></li>
                <li><a href="#" class="text-decoration-none">Mới</a></li>
            </ul>
        </div>

         <!---links-->
         <div class="footer-links">
            <strong>Danh Mục</strong>
            <ul>
                <li><a href="#" class="text-decoration-none">Iphone</a></li>
                <li><a href="#" class="text-decoration-none">Samsung</a></li>
                <li><a href="#" class="text-decoration-none">Oppo</a></li>
                <li><a href="#" class="text-decoration-none">Khác</a></li>
            </ul>
        </div>

         <!---links-->
         <div class="footer-links">
            <strong>Contact</strong>
            <ul>
                <li><a href="#" class="text-decoration-none">Phone: +123456789</a></li>
                <li><a href="#" class="text-decoration-none">Email: lethanhy780@gmail.com</a></li>
                
            </ul>
        </div>

        
        

    </div>
   </footer>

    
</body>
</html>