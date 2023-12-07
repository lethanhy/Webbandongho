<?php
require_once "header.php";
require_once "config/db.php";




if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    if (!$password || !$username){
       echo '<script language="javascript">alert("không được bỏ trống!"); window.location="dangnhap.php";</script>';
        exit;

    }else{

    $sql="SELECT * from login where username='".$username."' AND password='".$password."' ";

    $result = mysqli_query($connect,$sql);
    
    $row = mysqli_fetch_array($result);

        if($row["usertype"]=="user")
        {
            $_SESSION['username']=$row['username'];
            $_SESSION['id']=$row['id'];
            header("location:trangchu.php");
            
        }elseif($row["usertype"]=="admin")
        {
            $_SESSION['username']=$row['username'];
            header("location:admintrangchu.php");
        }
        else{
            echo "sai mat khau";
        }
   }

}
require_once "header.php";

?>






   

    <div class="d-flex justify-content-center align-items-center vh-100">
    
        <form class="shadow w-450 p-3" action="" method="POST">
            <h4 class="display-4 text-center fs-1">Đăng Nhập</h4><br>
           
            <div class="mb-3">
                <label class="form-label">Họ và tên</label> 
                <input type="text" class="form-control" name="username" value="">
            </div>
            <div class="mb-3">
                <label class="form-label">Mật khẩu</label> 
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Đăng Nhập</button>
            <a href="dangky.php" class="link-secondary">Đăng Ký</a>
        </form>
    </div>
   
   


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
