<?php
echo $id = $_GET['id'];

$conn = new mysqli('localhost', 'root', '', 'webbandongho');
$sql = "DELETE FROM login WHERE id = $id";
$result = $conn->query($sql);

if($result){
    header('Location: http://localhost/nienluan/admintaikhoan.php');
}else{
    echo 'Không xóa được';
}

?>