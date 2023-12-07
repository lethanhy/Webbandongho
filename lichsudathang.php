<?php
require_once "header.php";
?>
<style>
    .donhang{
        margin-top:8rem;
        margin-bottom:1rem;
    }
</style>
<div class="container">
    <h3 class="donhang text-center">Lịch sử đặt hàng</h3>
    
    <table class="table">
    <thead class="thead-dark text-center">
        <tr>
        <th scope="col">STT</th>
        <th scope="col">Tên</th>
        <th scope="col">Địa chỉ</th>
        <th scope="col">Email</th>
        <th scope="col">Ngày đặt hàng</th>
        <th scope="col">Giá</th>
        <th scope="col">Số điện thoại</th>
        <th scope="col">Sản phẩm đã mua</th>
        <th scope="col">Trạng thái</th>

        
        </tr>
    </thead>
    <tbody>
        <?php
        $stt=1;
        $select_donhang=mysqli_query($connect,"SELECT * FROM `order` where id_khach=$id_khachhang");
        if(mysqli_num_rows($select_donhang)>0){
            while($row=mysqli_fetch_assoc($select_donhang)){
              ?>
                <tr>
                    <th scope="row"><?php echo $stt++; ?></th>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['date'];?></td>
                    <td><?php echo number_format($row['total']); ?>VND</td>
                    <td><?php echo $row['phone'];?></td>
                    <td><?php echo $row['total_product']; ?></td>
                    <td class="text-success"><?php echo $row['status']; ?></td>

                    
                </tr>



              <?php  

            }

        }
        ?>
    </tbody>
    </table>
</div>
    