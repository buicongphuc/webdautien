<?php
session_start();
$connect =mysqli_connect("localhost", "root", "", "quanligaubong");
if(!$connect){
    exit("kết nối cơ sở dữ liệu không thành công!");
}

$ten = $_POST['f_user'];
$mk = $_POST['f_pass'];

$sql = "SELECT hoten FROM nguoidung WHERE tendangnhap = '$ten' AND matkhau = '$mk'";
$ketqua = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($ketqua);
$nguoidung = mysqli_num_rows($ketqua);
echo $nguoidung;   
if($nguoidung>0){
    $_SESSION['hoten'] = $row['hoten'];
    echo "<script>";
        echo "window.location = 'index.php';";
    echo" </script>";
}else{
    echo "<script>";
        echo "alert('Đăng nhập không thành công!');";
        echo "window.location = 'dangnhap.php';";
    echo" </script>";
}


?>
