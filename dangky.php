<?php
require_once "config/db.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $address = $_POST['diachi'];
   

    if (!$password || !$username || !$phone || !$email){
        echo '<script language="javascript">alert("Không được bỏ trống!"); window.location="dangky.php";</script>';
        

    }else{

    $sql = "INSERT INTO login (username, password, email, phone,address) VALUES('$username', '$password','$email', '$phone','$address')";

    $result = mysqli_query($connect,$sql);
    echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="index.php?page_layout=dangky";</script>';
    
    }
}
require_once "header.php";

?>






    
    <div class="d-flex justify-content-center align-items-center vh-100">
    
        <form class="shadow w-450 p-3 mt-3" action="" method="POST">
            <h4 class="display-4 text-center fs-1">Đăng Ký</h4><br>
            <!-- <div class="alert alert-danger" role="alert">
            </div>
            <div class="alert alert-success" role="alert">
            </div> -->
            <div class="mb-3">
                <label class="form-label">Họ và tên</label> 
                <input type="text" class="form-control"
                        name="username"
                        value="">
            </div>
            <div class="mb-3">
                <label class="form-label">Mật khẩu</label> 
                <input type="password" class="form-control" 
                        name="password"
                        value="">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label> 
                <input type="text" class="form-control" 
                        name="email"
                        value="">
            </div>
            <div class="mb-3">
                <label class="form-label">Số điện thoại</label> 
                <input type="text" class="form-control" 
                        name="phone"
                        value="">
            </div>
            <div class="mb-3">
                <label class="form-label">Địa chỉ</label> 
                <input type="text" class="form-control" 
                        name="diachi"
                        value="">
            </div>
            <button type="submit" class="btn btn-primary">Sign up</button>
            <a href="dangnhap.php" class="link-secondary">Đăng nhập</a>
        </form>
    </div>
   

<!--footer-->
   <footer>
    <div class="footer-container">


        <!--logo-container-->
        <div class="footer-logo">
            <a href="#">eGrocery</a>

            <!--social-->
            <div class="footer-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
           </div>


        </div>

        
        <!---links-->
        <div class="footer-links">
            <strong>Product</strong>
            <ul>
                <li><a href="#">Clothes</a></li>
                <li><a href="#">Packages</a></li>
                <li><a href="#">Popular</a></li>
                <li><a href="#">New</a></li>
            </ul>
        </div>

         <!---links-->
         <div class="footer-links">
            <strong>Category</strong>
            <ul>
                <li><a href="#">Beauty</a></li>
                <li><a href="#"></a></li>
                <li><a href="#">Popular</a></li>
                <li><a href="#">New</a></li>
            </ul>
        </div>

         <!---links-->
         <div class="footer-links">
            <strong>Contact</strong>
            <ul>
                <li><a href="#">Phone: +123456789</a></li>
                <li><a href="#">Email: lethanhy780@gmail.com</a></li>
                
            </ul>
        </div>
    </div>
   </footer>


    
</body>
</html>