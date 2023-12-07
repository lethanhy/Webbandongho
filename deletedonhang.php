<?php
echo $id = $_GET['id'];

$conn = new mysqli('localhost', 'root', '', 'webbandongho');
$sql = "DELETE FROM `order` WHERE id = $id";
$result = $conn->query($sql);

if($result){
    header('Location: http://localhost/nienluan/admindonhang.php');
}else{
    echo 'Không xóa được';
}

?>