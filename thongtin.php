<?php
require_once "header.php";


if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST["username"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $address = $_POST['diachi'];
   

   

    $sql = "UPDATE login SET username='$username', phone='$phone', email='$email', address='$address' where id='$id_khachhang' ";

    $result = mysqli_query($connect,$sql);
    echo '<script language="javascript">alert("Cập nhật thành công!"); window.location="thongtin.php";</script>';
    
}
?>
<style>
    .thongtin{
        margin-top:8rem;
    }
</style>
<div class="container mt-5">

    <form class="thongtin" method="post">
        <h3 class="text-center">Thông tin cá nhân</h3>

            <?php 
                $select_thongtin=mysqli_query($connect,"SELECT * FROM login where id=$id_khachhang");
                $row = mysqli_fetch_array($select_thongtin);

                ?>
            <div class="form-group">
                <label for="">Tên</label>
                <input type="text" class="form-control" name="username" aria-describedby="" placeholder="" value="<?php echo $name ?>">
            </div>
            <div class="form-group mt-2">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" placeholder="" value="<?php echo $row['email']; ?>">
            </div>
            <div class="form-group mt-2">
                <label for="">Số điện thoại</label>
                <input type="text" class="form-control" name="phone" placeholder="" value="<?php echo $row['phone'] ?>">
            </div>
            <div class="form-group mt-2">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" name="diachi" placeholder="" value="<?php echo $row['address'] ?>">
            </div>
        
            <button type="submit" class="btn btn-primary mt-2">Lưu</button>
            <?php
            ?>
    </form>
</div>