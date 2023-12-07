<?php 
require_once "adminheader.php";
?>

        <div class="container-fulid">
  <h2>Danh sách tinh nhắn</h2>

  <table class="table table-bordered bg-white">
    <thead class="text-center thead-dark">
      <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Sản Phẩm</th>
        <th>Tin nhắn</th>
        <th>Thao tác</th>
      </tr>
    </thead>
    <?php
        $conn = new mysqli('localhost','root','', 'webbandongho');

        $sql = "SELECT * From contacts";
        $result = $conn->query($sql);
        $stt = 1; 

        while($row = $result -> fetch_assoc()){
           
           echo
            "<tbody class='text-center'>
                <tr>
                    <td>".$stt++."</td>
                    <td>".$row["ten"]."</td>
                    <td>".$row["phone"]."</td>
                    <td>".$row["email"]."</td>
                    <td>".$row["sanpham"]."</td>
                    <td>".$row["tinnhan"]."</td>
                    <td>
                        <a href='http://localhost/nienluan/admin/delete.php/?id=".$row['id']."' class='btn btn-danger'>Xóa</a>
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