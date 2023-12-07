<?php

include "config/db.php";



if(isset($_POST['add_to_cart'])){
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $id_khachhang = $_POST['id_khachhang'];
    $product_quantity = 1;

    $select_cart= mysqli_query($connect,"SELECT * from cart where name='".$product_name."' ");

    $row = mysqli_fetch_array($select_cart);
    if($row !== null){
        $update = mysqli_query($connect,"UPDATE `cart` set quantity=quantity+1 where name='".$product_name."'");
    }else{

        $insert_product = mysqli_query($connect,"INSERT into cart (name,price,image,quantity,id_khach) values
     ('$product_name','$product_price','$product_image','$product_quantity','$id_khachhang')");

    //echo '<script language="javascript">alert("Thêm thành công!"); window.location="product.php";</script>';
    

    }
    
     

}
require_once "header.php";

?>


    <style>
        .container-fluid{
            max-width: 1070px;
            margin-top:110px;

        }
        .container-fluid p{
            font-size: 23px;
            margin-top: 2rem;
        }
        *{
            font-family: 'Inter', sans-serif;
            text-decoration: none;
            list-style: none;
        }
    </style>
</head>
<body>
   
    <!---Danh mục-->
    <div class="container-fluid">
        <div class="row">
          <div class="col-sm-3 bg-light">
            <p>Danh Mục</p>
            <div class="list-group">
                <a href="product.php?danhmuc=1" class="list-group-item list-group-item-action">Samsung</a>
                <a href="product.php?danhmuc=2" class="list-group-item list-group-item-action">Iphone</a>
                <a href="product.php?danhmuc=3" class="list-group-item list-group-item-action">Oppo</a>
            </div>
          </div>
          <div class="col-sm-9 bg-light ">
            <p>Sản Phẩm</p>


            <div id="samsung" class="product-container">
                <?php

                    if(isset($_GET['danhmuc'])) {
                        $select_product = mysqli_query($connect,"SELECT * FROM products Where brand_id = ".$_GET['danhmuc']."");
                    }
                    else
                        $select_product = mysqli_query($connect,"SELECT * FROM products ");
                    
                    if(mysqli_num_rows($select_product)>0){
                        while($fetch_product=mysqli_fetch_assoc($select_product)){
                ?>
                    <form action="" method="post" class="product">
                            <!--box-->
                        <div class="product-box shadow">
                            <img src="img/<?php echo $fetch_product['image'] ?>" alt="">
                            <strong><?php echo $fetch_product['prd_name'] ?></strong>
                            <span class="price"><?php echo number_format($fetch_product['price']) ?>VND</span>
                            <input type="hidden" name="product_name" value="<?php echo $fetch_product['prd_name'] ?>" >
                            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price'] ?> ">
                            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image'] ?>" >
                            <input type="hidden" name="id_khachhang" value="<?php echo $id_khachhang ?>" >

                
                            <!---cart-btn-->
                                <button type="submit" class="cart-btn" name="add_to_cart" >Add To Cart</button> 
                        </div>
                    </form>
                    <?php
            }
               
            }else{
                echo "no products";
            }
            ?>

        
          </div>
        </div>
      </div>
    </div>
    


 <!--footer-->
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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){
        $('.product').submit(function(e){
            <?php
            if(!isset($name)):
            ?>
            alert("Đăng nhập để mua");
            e.preventDefault();
            <?php else: ?>
            alert("Thành công");
            <?php endif ?>
        })
       
    })
</script>
</body>
</html>