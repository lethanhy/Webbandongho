<?php 
include "config/db.php";

if(isset($_POST['update_product_quantity'])){
    $update_value = $_POST['update_quantity'];
    $update_id = $_POST['update_quantity_id'];
    $update_quantity_query = mysqli_query($connect,"UPDATE cart set quantity=$update_value where id=$update_id");
    
}

if(isset($_GET['remove'])){
    $remove_id=$_GET['remove'];
    //echo $remove_id;
    mysqli_query($connect,"DELETE from cart where id = $remove_id");

}

if(isset($_GET['delete_all'])){
    mysqli_query($connect,"DELETE from cart");
    header('location: cart.php');
}
require_once "header.php";
?>



<style>
    .ten{
        margin-top:130px;
    }
</style>








        <div class="container">
        <h2 class="ten text-center pb-3" >Giỏ Hàng</h2>

        <?php 
        $number=1000;
        //echo $number;
        $format = number_format($number,2);
        //echo $format;
        ?>
        
        <table class="table table-bordered table-sm shadow">
            <?php 
           
            $select_cart_product=mysqli_query($connect,"SELECT * FROM `cart` where id_khach=$id_khachhang");
            
            $grand_total=0;
            if(mysqli_num_rows($select_cart_product)>0){
                echo "
                <thead>
                    <tr class='text-center table-danger'>
                        <th>STT</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Ảnh Sản Phẩm</th>
                        <th>Giá</th>
                        <th>Số Lượng</th>
                        <th>Total Price</th>
                        <th>Xóa</th>
                    </tr>
                </thead>";
                $stt=1;
                
                while($fetch_cart_product=mysqli_fetch_assoc($select_cart_product)){
                    ?>
                        <tbody class="text-center">
                            <tr>
                                <td><?php echo $stt++ ?></td>
                                <td><?php echo $fetch_cart_product['name'] ?></td>
                                <td>
                                    <img style="width:100px;" src="img/<?php echo $fetch_cart_product['image'] ?>" alt="Apple">
                                </td>
                                <td><?php echo number_format($fetch_cart_product['price'])?>VND</td>
                                <td>
                                    <form action="" method="post">
                                        <input type="hidden" value="<?php echo $fetch_cart_product['id'] ?>" 
                                        name="update_quantity_id">
                                        <div class="quantity_box">
                                            <input type="number" min="1" value="<?php echo $fetch_cart_product['quantity'] ?>" name="update_quantity">
                                            <input type="submit" class="update_quantity" value="Update" name="update_product_quantity">
                                        </div>
                                    </form>


                                </td>
                                <td><?php echo $subtotal=number_format($fetch_cart_product['price']*$fetch_cart_product['quantity']) ?>VND</td>
                                <td ><a href="cart.php?remove=<?php echo $fetch_cart_product['id']?>" class='btn btn-danger' onclick="return confirm('Bạn có muốn xóa không')">Remove</a></td>
                            </tr>
                        </tbody>



                    <?php
                    $grand_total+=($fetch_cart_product['price']*$fetch_cart_product['quantity']);

                } 
               

            }else{
                echo "
                <thead>
                    <tr class='text-center table-danger'>
                        <th>STT</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Ảnh Sản Phẩm</th>
                        <th>Giá</th>
                        <th>Số Lượng</th>
                        <th>Total Price</th>
                        <th>Xóa</th>
                    </tr>
                </thead>";
            }
            ?>
           
            
        </table>
        <?php
        $total=number_format($grand_total);
        if($total>0){
            echo " <div class='table_bottom d-flex justify-content-between '>
            <a href='product.php' class='bottom_btn btn btn-primary'>Quay lại Shopping</a>
            <h3 class='bottom_btn'>Tổng Tiền: <span>$total</span>VND</h3>
            <a href='order.php' class='bottom_btn btn btn-primary'>Tiến hành thanh toán</a>
            </div>";
        
        ?>

        <button type="button" class="btn btn-danger mt-2"><a href="cart.php?delete_all" class="delete text-white text-decoration-none">Delete ALL</a></button>
   
        <?php
       

   
     }else{
    echo "";
   }    ?> 
  </div>


        



</body>
</html>
