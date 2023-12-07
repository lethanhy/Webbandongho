<?php
require_once "adminheader.php";

$sql = "select * from products inner join brands on products.brand_id = brands.brand_id";
$query = mysqli_query($connect,$sql);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['submit'])){
    $search=$_POST['search'];

    $query = mysqli_query($connect,"SELECT * FROM products where prd_name LIKE '%$search%' ");
    // $query = mysqli_num_rows($select_search);

    // if($query > 0){
    //     $query = $select_search;
    // }else{
    //     echo 'không có';
    // }

}else{
    echo "Không có";
}
}





?>



        <div class="container-fluid">
            
        <form class="d-flex p-2" method="post">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-primary" type="submit" name="submit">Search</button>
        </form>

        <div class="card">
        <div class="card-header">
            <h2>Danh sách sản phẩm</h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered bg-white">
                <thead class="thead-dark text-center">
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Số lượng sản phẩm</th>
                        <th>Mô tả</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    while($row = mysqli_fetch_assoc($query)){?>
                        <tr>
                                <td><?php echo $i++ ?></td>
                                <td><?php echo $row['prd_name']; ?></td>

                                <td>
                                    <img style="width: 100px;" src="img/<?php echo $row['image']; ?>">
                                </td>

                                <td><?php echo number_format($row['price']); ?>VND</td>
                                <td><?php echo $row['quantity']; ?></td>
                                <td><?php echo $row['description']; ?></td>
                                
                                <td>
                                    <a href="index.php?page_layout=sua&id=<?php echo $row['prd_id']; ?>" class='btn btn-primary'>Sửa</a>
                                </td>
                                <td>
                                    <a onclick="return Del('<?php echo $row['prd_name']; ?>')" href="index.php?page_layout=xoa&id=<?php echo $row['prd_id']; ?>" class='btn btn-danger'>Xóa</a>
                                </td>
                        </tr>  
                   <?php } ?>

                </tbody>
            </table>
            <a class="btn btn-primary" href="index.php?page_layout=them">Thêm mới</a>
        </div>
    </div>
</div>
<script>
    function Del(name){
        return confirm("Bạn có chắc chắn muốn xóa sản phẩm: " + name + "?");
    }
</script>
        
    </div>
</div>
</body>
</html>