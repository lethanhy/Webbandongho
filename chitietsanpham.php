<?php
require_once "config/db.php";



   
if(isset($_POST['add_to_cart'])){
    $detail_name = $_POST['detail_name'];
    $detail_price = $_POST['detail_price'];
    $detail_image = $_POST['detail_image'];
    $detail_number = $_POST['detail_number'];
    $id_khachhang = $_POST['id_khachhang'];


    $insert_detail = mysqli_query($connect,"INSERT into cart (name,price,image,quantity,id_khach) values
     ('$detail_name','$detail_price','$detail_image','$detail_number','$id_khachhang')");

   
    
     

}
require_once "header.php";

?>


    <!--<link rel="stylesheet" href="index.css">-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        #chitietsp{
            margin-top:150px;
        }
         .product-items img{
            width: 450px;
            
        } 
        .stat{
            color:#FFD700;
        }
        .price{
            font-size:2rem;
            
        
           
        }
        .cart-btn{
            width: 45%;
            height: 40px;
            background-color: #ecf7ee;
            color: #4eb060;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            transition: all ease 0.3s;
            border: 2px solid #e7e7e7;
        }
        .cart-btn:hover{
            background-color: #4eb060;
            color: #fff;
            transition: all ease 0.3s;
        }

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
            scroll-padding-top: 3rem;
            font-family: 'Inter', sans-serif;
        }
        a{
            text-decoration: none;
        
        }
        .container{
            max-width: 1060px;
            margin: auto;
            width: 100%;
        }
        header{
        position: fixed;
            top: 20px;
            left: 0;
            width: 100%;
            z-index: 100;
        }
        .nav{
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgb(215, 244, 253);
            padding: 10px 20px;
            border-radius: 2rem;
        }
        .logo{
            font-size: 1.4rem;
            font-weight: 700;
            color:black;
            text-decoration: none;
            margin-left: 1rem;
        }
        .navbar{
            display: flex;
            align-items: center;
            column-gap:1.5rem ;
        
        }
        .nav-link{
            font-size: 1rem;
            color: #000;
            
        }
        .nav-link:hover{
            color: yellow;
            transition: 0.4s all;
        }
        .nav-icons{
            display: flex;
            align-items: center;
            column-gap: 1rem;
        
        }
        .nav-icons i{
            color: #000;
        }

        .dropbtn {
            background-color: #4cafad;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 1rem;
        }
        
        .dropdown {
            position: relative;
            display: inline-block;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        
        .dropdown-content a:hover {background-color: #f1f1f1}
        
        .dropdown:hover .dropdown-content {
            display: block;
        }
        
        .dropdown:hover .dropbtn {
            background-color: rgb(62, 129, 142);
        }
    </style>



        

    <section>

            <div class="container">
                <form action="" method="post" class="product" id="chitietsp">
                
                <?php 
                     $idsp = $_GET['id'];
                     $select_idsp = "SELECT * FROM `products` where prd_id = $idsp";
                     $result = mysqli_query($connect,$select_idsp);
                     $row = mysqli_fetch_array($result);
                ?>
                
                   
                    <div class="row">
                        <div class="col-lg-6 product-items">
                           <img src="img/<?= $row['image']; ?>" alt="">
                        </div>   
                       
                        

                        <div class="col-lg-6">
                            <h1><?= $row['prd_name'] ?></h1>
                            <div class="stat mt-3">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <span class="price"><?= number_format($row['price']) ?>VND</span>
                            <p class="mt-4" name=""><?= $row['description'] ?></p>
                           
                            Số lượng: <input type="number" name="detail_number" id="" value="1">
                            <input type="hidden" name="detail_name" value="<?= $row['prd_name'] ?>">
                            <input type="hidden" name="detail_price" value="<?= $row['price'] ?>">
                            <input type="hidden" name="detail_image" value="<?= $row['image'] ?>">
                            <input type="hidden" name="id_khachhang" value="<?php echo $id_khachhang ?>" >

                            <button type="submit" class="cart-btn"  name="add_to_cart">Add to cart</button>

                        </div>
                     </div>
        
                   </form>

                
            </div>
    </section>

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