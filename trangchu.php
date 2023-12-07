
<?php
include "config/db.php";




if(isset($_POST['add_to_cart'])){
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $id_khachhang = $_POST['id_khachhang'];
    $product_quantity = 1;


    $insert_product = mysqli_query($connect,"INSERT into cart (name,price,image,quantity,id_khach) values
     ('$product_name','$product_price','$product_image','$product_quantity','$id_khachhang')");

    //echo '<script language="javascript">alert("Thêm thành công!"); window.location="trangchu.php";</script>';
    
     

}

require_once "header.php";


?>

    <section id="search-banner">
        <img src="img/OSyGo2o0EgAsbrQxTjxTrsaLn47qc6NiG2zDMs0W.png" alt="bg" class="bg-1">
       

        <div class="search-banner-text">
            <h1>Order Your daily Groceries</h1>
            <strong>#Free Delivery</strong>
        </div>
    </section>

     <!--popular product-->
    <section id="popular-product">

        <!--heading-->
        <div class="product-heading">
            <h3>Popular Product</h3>
            <span>All</span>
        </div>

        <!--product-box-container-->
        <div class="product-container">
            <?php
            
                    
            
            $select_product = mysqli_query($connect,"SELECT * FROM products ");
            if(mysqli_num_rows($select_product)>0){
                while($fetch_product=mysqli_fetch_assoc($select_product)){
                    ?>
                    <form action="" method="post" class="product">
                        <!--box-->
                        <div class="product-box">
                            <a href="chitietsanpham.php?id=<?php echo $fetch_product['prd_id']; ?>">
                            <img src="img/<?php echo $fetch_product['image'] ?>" alt=""  >
                            </a>
                            
                            <strong><?php echo $fetch_product['prd_name'] ?></strong>
                            <!--<span class="quantity">1KG</span>-->
                            <span class="price"><?php echo number_format($fetch_product['price']) ?>VND</span>
                            <input type="hidden" name="product_name" value="<?php echo $fetch_product['prd_name'] ?>" >
                            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price'] ?> ">
                            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image'] ?>" >
                            <input type="hidden" name="id_khachhang" value="<?php echo $id_khachhang ?>" >

                            <!---cart-btn-->
                            <button type="submit" class="cart-btn"  name="add_to_cart">Add to cart</button>

                        
                        </div>
                    </form>
                    <?php
                }
            
            }else{
                echo "no products";
            }
        
            ?>

        </div>

    </section>


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
            alert("Thêm thành công");
            <?php endif ?>
        })
       
    })
</script>

   


</body>
</html>