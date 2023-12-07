<?php
include "config/db.php";
require_once "header.php";

if(isset($_POST['thanhtoan'])){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $id_khach = $_POST['id_khach'];

    $cart_query = mysqli_query($connect,"SELECT * FROM cart WHERE id_khach = $id_khachhang");
    $price_total=0;
    $number=1000;
    //echo $number;
    $format = number_format($number,2);
    //echo $format;
    
    if(mysqli_num_rows($cart_query) > 0){
        while($product_item = mysqli_fetch_assoc($cart_query)){
            $product_name[] = $product_item['name'] .'('.$product_item['quantity'] .')';
            $product_price[] = number_format($product_item['price'] * $product_item['quantity']);
            $price_total +=($product_item['price'] * $product_item['quantity']);
        };
    };

    $total_product = implode(', ',$product_name);
    $detail_query = mysqli_query($connect,"INSERT into `order` (name, address,email,total,phone,total_product,id_khach) VALUES('$name','$address','$email','$price_total','$phone','$total_product','$id_khach')");
    
    
    
    if($cart_query && $detail_query){
        echo "
            <div class='order-message-container'>
                <div class='message-container'>
                    <h3>Cảm ơn đã mua hàng</h3>
                    <div class='order-detail'>
                        <span>".$total_product."</span>
                        <span class='total'> Tổng tiền: ".number_format($price_total)." VND</span>
                    </div>
                    <div class='customer-details'>
                        <p> Tên: <span>".$name."</span></p>
                        <p>Số điện thoại: <span>".$phone."</span></p>
                        <p>Địa chỉ: <span>".$address."</span></p>
                        <p>Email: <span>".$email."</span></p>
                    </div>
                    <a href='product.php' class='btn'>Tiếp tục Shopping</a>
                </div>
            </div>
        ";

    }



}
if(isset($_POST['thanhtoan'])){
    mysqli_query($connect,"DELETE from cart");
    //header('location: cart.php');
}

?>







    <style>
        .display-order{
            max-width: 50rem;
            background-color: #faebd7 ;
            border-radius: .5rem;
            text-align:center;
            padding:1.5rem;
            margin:0 auto;
            margin-bottom:2rem;
            margin-top:130px;
        }
        .display-order span{
            display:inline-block;
            border-radius: .5rem;
            background-color: #f8f8ff;
            padding: .5rem 1.5rem;
            font-size:1.5rem;
            color: black;
            margin:.5rem;
        }
        .display-order span.grand-total{
            width: 100%;
            background-color: #00f99a;
            padding: 1rem;
            margin-top: 1rem;
        }
        .order-message-container{
            position: fixed;
            top: 0; left:0;
            min-height:100vh;
            overflow-y:scroll;
            overflow-x:hidden;
            padding:2rem;
            display:flex;
            align-items:center;
            justify-content:center;
            z-index:1100;
            background-color: #f0f8ff ;
            width: 100%;

        }
        .order-message-container::-webkit-scrollbar{
            width: 1rem;
        }
        .order-message-container::-webkit-scrollbar-track{
            background-color: #faebd7 ;
            
        }
        .order-message-container::-webkit-scrollbar-thumb{
            background-color: #faebd7 ;  
        }
        

        .order-message-container .message-container{
            width: 50rem;
            background-color: #faebd7 ;
            padding: 2rem;
            text-align:center;
            
        }
        .order-message-container .message-container h3{
            font-size:2.5rem;
            color:black;
        }
        .order-message-container .message-container .order-detail{
            background-color: #00ffff ;
            border-radius:.5rem;
            padding:1rem;
            margin:1rem 0;
        } 
        .order-message-container .message-container .order-detail span{
            background-color: white ;
            border-radius:.5rem;
            color:black;
            font-size:1rem;
            display:inline-block;
            padding:.5rem 1rem;
            margin:1rem;
        }
        .order-message-container .message-container .order-detail span.total{
            display:block;
            

        }
        .order-message-container .message-container .order-detail p span{
            color:blue;
            padding: 0 .5rem;

        }
        



    </style>

    <div class="container">

         
                <div class="row">
                    <form action="" method="POST">
                       <div class="display-order shadow">
                            <?php 
                            $number=1000;
                            //echo $number;
                            $format = number_format($number,2);
                            //echo $format;

                            $select_cart=mysqli_query($connect,"SELECT * FROM cart where id_khach=$id_khachhang");
                            $grand_total=0;
                            if(mysqli_num_rows($select_cart)>0){
                                while($fetch_cart=mysqli_fetch_assoc($select_cart)){
                                    $total_price = number_format($fetch_cart['price'] * $fetch_cart['quantity']);
                                    $grand_total +=($fetch_cart['price'] * $fetch_cart['quantity']);
                                    

                            ?>
                            <span><?= $fetch_cart['name']; ?>(<?= $fetch_cart['quantity']; ?>)</span>
                            <?php

                                //}else{
                                    //echo "<div class='display-order'><span>cart is empty!</span></div>";

                                };
                            };
                            ?>
                            <span class="grand-total"> Tổng tiền: <?= number_format($grand_total)?>VND</span>
                            </div>





                    <div class="col">
                        <h4>Thông tin người đặt</h4>
                        <?php 
                        $select_khach_mua = mysqli_query($connect,"SELECT * FROM login where id=$id_khachhang");
                        $row = mysqli_fetch_array($select_khach_mua);

                        ?>
                        
                        <div class="mb-3">
                            <label for="" class="form-label">Họ và tên</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Địa chỉ</label>
                            <input type="text" name="address" class="form-control" value="<?php echo $row['address'] ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $row['email'] ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Số điện thoại</label>
                            <input type="number" name="phone" class="form-control" value="<?php echo $row['phone'] ?>">
                        </div>

                        <input type="hidden" name="id_khach" value="<?php echo $id_khachhang ?>">
                    
                    </div>
                    

                    <input type="submit" class="btn btn-primary" value="submit" name="thanhtoan">
                </form>
                </div>
                

            
    </div>
        
</body>
</html>