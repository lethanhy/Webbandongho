<?php 
require_once "config/db.php";

require_once "header.php";
?>


    <style>
       .heading{
        text-align: center;
        margin-top: 190px;
        
       }
       .heading h1{
        font-size: 50px;
        color: #36455c;
        margin-bottom: 10px;
       }
       .heading p{
        font-size: 20px;
        color: #36455c;
        margin-bottom: 20px;
       }
       .about-us{
        display: flex;align-items: center;
        width: 85%;
        margin: auto;
        margin-bottom: 25px;
       }
       .about-us img{
        flex: 0 50%;
        max-width: 50%;
        height: auto;
       }
       .content{
        padding: 35px;
       }
       .content h2{
        color: #36455c;
        font-size: 24px;
        margin: 15px 0;
       }
       .content p{
        font-size: 18px;
        line-height: 1.5;
        margin: 15px 0;
       }
       .read-more-btn{
        display: inline-block;
        color: #fff;
        background-color: #0084ff;
        border: none;
        border-radius: 5px;
        padding: 12px 20px;
        font-size: 18px;
        cursor: pointer;
        transition: 0.2s ease;
       }
       .read-more-btn:hover{
        background-color: #006dd6;
       }
       @media(max-width:768px){
        .about-us{
            flex-direction: column;
        }
        .about-us img{
            flex: 0 100%;
            max-width: 100%;
        }
        .content{
            flex: 0 100%;
            max-width: 100%;
            padding: 15px;
        }
       }
    </style>
</head>
<body>



    <div class="heading">
        <h1>About Us</h1>
        <p>Giải trí ngay trong tầm tay của bạn</p>
    </div>
    <section class="about-us">
        <img src="img/cach-su-dung-dong-ho-thong-minh.jpg" alt="">
        <div class="content">
            <h2>Tiện ích phù hợp với nhu cầu sử dụng, biến smartwatch thành trợ thủ đắc lực</h2>
            <p>Nói đến smartwatch thì đương nhiên không thể bỏ qua tính năng theo dõi sức khỏe khi thiết bị này có thể ghi lại nhịp tim, số bước chân, số calo đã tiêu thụ trong ngày và nhiều hơn thế nữa, từ đó tổng hợp lại và cho bạn một thống kê cụ thể về tình hình sức khỏe của mình. 
             Smartwatch giúp bạn theo dõi chính sức khỏe của mình để chủ động có kế hoạch tăng cường tập luyện hoặc tránh những trường hợp xấu có thể xảy ra. Những ai đang quan tâm tới sức khỏe hay muốn chọn một món quà thật ý nghĩa cho những người mà mình quan tâm thì đừng bỏ qua những chiếc smartwatch nha.
            </p>
            <button class="read-more-btn">Read more</button>
        </div>
    </section>
    <!--footer-->
    <footer>
    <div class="footer-container ">


        <!--logo-container-->
        <div class="footer-logo">
            <a href="#" class="text-decoration-none">Y STORE</a>

            <!--social-->
            <div class="footer-social">
                <a href="#" class="text-decoration-none"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-decoration-none"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-decoration-none"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-decoration-none"><i class="fab fa-youtube"></i></a>
           </div>


        </div>


        <!---links-->
        <div class="footer-links">
            <strong>Sản Phẩm</strong>
            <ul>
                <li><a href="#" class="text-decoration-none">Đồng hồ Apple</a></li>
                <li><a href="#" class="text-decoration-none">Đồng hồ Iphone</a></li>
                <li><a href="#" class="text-decoration-none">Phổ biến</a></li>
                <li><a href="#" class="text-decoration-none">Mới</a></li>
            </ul>
        </div>

         <!---links-->
         <div class="footer-links">
            <strong>Danh Mục</strong>
            <ul>
                <li><a href="#" class="text-decoration-none">Iphone</a></li>
                <li><a href="#" class="text-decoration-none">Samsung</a></li>
                <li><a href="#" class="text-decoration-none">Oppo</a></li>
                <li><a href="#" class="text-decoration-none">Khác</a></li>
            </ul>
        </div>

         <!---links-->
         <div class="footer-links">
            <strong>Contact</strong>
            <ul>
                <li><a href="#" class="text-decoration-none">Phone: +123456789</a></li>
                <li><a href="#" class="text-decoration-none">Email: lethanhy780@gmail.com</a></li>
                
            </ul>
        </div>

        
        

    </div>
   </footer>

</body>
</html>