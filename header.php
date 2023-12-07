<?php 
require_once "config/db.php";
session_start();

if(isset($_SESSION['id'])){
    $id_khachhang=$_SESSION['id'];

    $select_rows = mysqli_query($connect,"SELECT * FROM `cart` where id_khach=$id_khachhang");
    $row_count = mysqli_num_rows($select_rows);
    
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,300;0,400;0,500;0,800;1,100;1,200;1,300;1,400;1,800&family=Inter:wght@400;600&family=Nunito:ital,wght@0,500;0,600;1,300&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Slab:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <title>Website bán đồng hồ</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="index.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
</head>
<body>
    <header>
        <div class="nav container" >

            <a href="trangchu.php" class="logo">Y STORE</a>
            
            <div class="navbar ">
                <a href="trangchu.php" class="nav-link text-black">Trang Chủ</a>
                <a href="product.php" class="nav-link text-black">Sản Phẩm</a>
                <a href="aboutus.php" class="nav-link text-black">Giới Thiệu</a>
                <a href="contact.php" class="nav-link text-black">Liên Hệ</a>
            </div>
            <div class="nav-icons">
               
               <a href=""><i class="fas fa-search"></i></a>
              
            
            
            
               

                    <?php
                    //  $select_rows = mysqli_query($connect,"SELECT * FROM `cart`");
                    //     $row_count = mysqli_num_rows($select_rows);
                    ?>

                        
                    
                    

                    <?php 
                    if(isset($_SESSION['username'])){
                        $name=$_SESSION['username']

                    ?>
                     <a href="cart.php"><i class="fas fa-shopping-cart"><span><?php echo $row_count;?></span></i></a>

                        <div class="dropdown">
                        <button class="dropbtn"><?php if(isset($name)) echo $name; ?></button>
                        <div class="dropdown-content">
                            <a href="thongtin.php">Thông tin</a>
                            <a href="lichsudathang.php">Lịch sử đặt hàng</a>
                            <a href="dangxuat.php">Đăng Xuất</a>
                        </div>
                    </div>
                    <?php 
                
                        
                    }else{
                        ?>
                        <a class="gio" href="cart.php"><i class="fas fa-shopping-cart"></span></i></a>
                        <a href="dangnhap.php"><i class="fas fa-user"></i></a>
                        <?php
                    }
                    ?>
            </div>
        </div>
            
    </header>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   <script>
    $(document).ready(function(){
        $('.gio').click(function(e){
            <?php
            if(!isset($name)):
            ?>
            alert("Đăng nhập để mua");
            e.preventDefault();
            <?php else: ?>
            alert("Thêm thành công");
            <?php endif ?>
        })
       
    })
</script>

   
        
</body>
</html>