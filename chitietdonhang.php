<?php
require_once 'adminheader.php';
$id_donhang=$_GET['id'];
$select_donhang=mysqli_query($connect,"SELECT * FROM `order` where id=$id_donhang");
$row=mysqli_fetch_array($select_donhang);


if($_SERVER["REQUEST_METHOD"]=="POST"){
    $status= $_POST['status'];

    $update_donhang=mysqli_query($connect,"UPDATE `order` SET status='$status' where id=$id_donhang");

    header('location: admindonhang.php');
    
}
?>

<div class="container shadow bg-white ">
    <form action="" method="post">
        <h2 class="text-center pt-2">Chi tiết đơn hàng</h2>
        <p>Id khách hàng: <?= $row['id_khach']; ?></p>
        <p>Tên khách hàng: <?= $row['name']; ?></p>
        <p>Địa chỉ: <?= $row['address']; ?></p>
        <p>Email khách hàng: <?= $row['email']; ?></p>
        <p>Ngày mua hàng: <?= $row['date']; ?></p>
        <p>Số điện thoại: <?= $row['phone']; ?></p>
        <p>Tổng tiền: <?= number_format($row['total']); ?>VND</p>
        <p>Tên sản phẩm: <?= $row['total_product']; ?></p>

        <div class="d-flex">
            <p>Trạng thái đơn hàng: </p>
            <div>
                <select name="status" id="">
                    <option <?= $row['status'] == 'Đang xử lý'? 'selected': '';?>>Đang xử lý</option>
                    <option <?= $row['status'] == 'Đã hủy'? 'selected': '';?>>Đã hủy</option>
                    <option <?= $row['status'] == 'Đã giao'? 'selected': '';?>>Đã giao</option>
                </select>
            </div>
        </div>

         <button type="submit" class="btn btn-primary mb-2">Cập nhật</button>
    </form>


</div>