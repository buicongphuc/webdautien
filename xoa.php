<?php
    session_start();
    if(!isset($_SESSION['hoten'])){
        header('location:dangnhap.html');
    }
    $connect =mysqli_connect("localhost", "root", "", "quanligaubong");
    if(!$connect){
        exit("kết nối cơ sở dữ liệu không thành công!");
    }

    $id_canxoa = $_GET['idxoa'];

    $sql="DELETE FROM sanpham WHERE id = $id_canxoa";
    $ketqua = mysqli_query($connect, $sql);
    echo" <script>";
    if($ketqua){
        echo "alert(\"Xoá thành công\");";
    }else{
        echo "alert(\"XOá không thành công\");";
    }
    echo "window.location = \"index.php\";";    
echo "</script>";
?>