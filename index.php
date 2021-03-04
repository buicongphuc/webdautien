<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Document</title>
</head>
<?php   
    include('funshions.php');
    $connect =mysqli_connect("localhost", "root", "", "quanligaubong");
    if(!$connect){
        exit("kết nối cơ sở dữ liệu không thành công!");
    }
    $sql = "SELECT a.id, hinhanh, tensanpham, giasanpham, kichthuoc, tennhasanxuat FROM sanpham a, tennhasanxuat b WHERE a.id_nhasanxuat = b.id";
    $ketqua = mysqli_query($connect, $sql);
?>
<body>
    <div class="nav">
        <ul>
            <li><a href="">Trang chủ</a></li>
            <li><a href="">Sản phẩm</a>
                <ul class = "sub-menu">
                    <li><a href="">Mới cập nhật</a></li>
                    <li><a href="">Đã bán</a></li>
                    <li><a href="">Đặt cọc</a></li>
                </ul>
            </li>
            <li><a href="">Giới thiệu</a></li>
            <?php
                if(isset($_SESSION['hoten'])){
                    echo "<li><a href=\"quantri.php\">Xin chào: ".$_SESSION['hoten']." </a></li>";
                    echo "<li><a href=\"quantri.php\">Trang quản trị</a></li>";
                    echo "<li><a href=\"dangxuat.php\">Đăng xuất</a></li>";
                }else{
                    echo "<li><a href=\"dangnhap.html\">Đăng nhập</a></li>";
                }
            ?>    
        </ul>
    </div>
<div class="container">
    <div class="title"><h2>Sản phẩm mới</h2></div>
    <div class="row">
        <?php 
           while ($row = mysqli_fetch_array($ketqua)){
            echo inSanPham($row['hinhanh'], $row['tensanpham'], $row['giasanpham'], $row['kichthuoc'], $row['tennhasanxuat']);
           }
        ?>
    </div>
</div>
</body>
</html> 