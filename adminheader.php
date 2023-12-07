<?php
include "config/db.php";
session_start();

if(!isset($_SESSION['username'])){
    header('location: dangnhap.php');
}

if(isset($_SESSION['username'])){
    $admin = $_SESSION['username'];
    //unset($_SESSION['username']);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="admin.css">

      <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Admin</title>
</head>
<body>
    <div class="sidebar">
        <div class="logo"></div>
            <ul class="menu">
                <li class="active">
                    <a href="#" >
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="admintrangchu.php">
                        <i class="fas fa-house"></i>
                        <span>Trang Chủ</span>
                    </a>
                </li>
                <li>
                    <a href="adminsanpham.php">
                    <i class="fa-solid fa-calendar-days"></i>
                        <span>Sản Phẩm</span>
                    </a>
                </li>
                <li>
                    <a href="admindonhang.php">
                      <i class="fa-regular fa-clipboard"></i>
                        <span>Đơn Hàng</span>
                    </a>
                </li>
                <li>
                    <a href="admintaikhoan.php">
                    <i class="fa-regular fa-address-book"></i>
                        <span>Khách Hàng</span>
                    </a>
                </li>
                <li>
                    <a href="admincontact.php">
                        <i class="fas fa-question-circle"></i>
                        <span>FAQ</span>
                    </a>
                </li>
                
                <li class="logout">
                    <a href="dangxuat.php" >
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
    </div>

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>Primary</span>
                <h2>Dashboard</h2>
            </div>
            <div class="user--info">
                <div class="searh--box">
                    <i class="fa-solid fa-search"></i>
                    <input type="text" placeholder="Search">
                </div>
                <img src="img/tải xuống.png" alt="">
                <p><?php if(isset($admin)) echo $admin; ?></p>
            </div>
        </div>
        

