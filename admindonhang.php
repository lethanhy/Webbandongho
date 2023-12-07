<?php 
require_once "adminheader.php";
?>
<style>
  
  
  
</style>

        <div class="container-fluid">
          <h2>Danh sách đơn hàng</h2>

  <table class="table table-bordered bg-white text-center">
    <thead class="text-center thead-dark">
      <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Địa chỉ</th>
        <th>Ngày mua</th>
        <th>Phone</th>
        <th>Trạng thái</th>
        <th>Thao tác</th>
      </tr>
    </thead>
    <?php
        $conn = new mysqli('localhost','root','', 'webbandongho');

        $sql = "SELECT * From `order`";
        $result = $conn->query($sql);
        $stt = 1; 

        while($row = $result -> fetch_assoc()){
           
           echo
            "<tbody>
                <tr>
                    <td>".$stt++."</td>
                    <td>".$row["name"]."</td>
                    <td>".$row["address"]."</td>
                    <td>".$row['date']."</td>
                    <td>".$row["phone"]."</td>
                    <td><span class='text-success'>".$row["status"]."</span></td>
                    <td>
                        <a href='chitietdonhang.php?id=".$row['id']."' class='btn btn-primary'>Xem</a>
                        <a href='http://localhost/nienluan/deletedonhang.php/?id=".$row['id']."' class='btn btn-danger'>Xóa</a>
                    </td>
                </tr>
            </tbody> ";
        }
    ?>
   
  </table>
</div>
        
    </div>
</div>
</body>
</html>