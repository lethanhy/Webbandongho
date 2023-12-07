<?php 
require_once "adminheader.php";
require_once 'config/db.php';

?>

        <div class="container-fuild">
        <form class="d-flex p-2" method="post">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-primary" type="submit" name="submit">Search</button>
        </form>
            <h2>Danh sách tài khoản</h2>

            <table class="table table-bordered bg-white">
                <thead class="text-center thead-dark">
                <tr>
                    <th>STT</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Thao Tác</th>
                </tr>
                </thead>
                <?php
                    $conn = new mysqli('localhost','root','', 'webbandongho');

                    $sql = "SELECT * From login";
                    $result = $conn->query($sql);
                    $stt = 1;

                    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                        if(isset($_POST['submit'])){
                        $search=$_POST['search'];
                    
                        $result = mysqli_query($connect,"SELECT * FROM login where username LIKE '%$search%' ");
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
                    
                     

                    while($row = $result -> fetch_assoc()){
                    
                    echo
                        "<tbody class='text-center'>
                            <tr>
                                <td>".$stt++."</td>
                                <td>".$row["username"]."</td>
                                <td>".$row["email"]."</td>
                                <td>".$row["phone"]."</td>
                                <td>
                                    <a href='index.php?page_layout=edit' class='btn btn-primary'>Sửa</a>
                                    <a href='http://localhost/nienluan/xoataikhoan.php/?id=".$row['id']."' class='btn btn-danger'>Xóa</a>
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