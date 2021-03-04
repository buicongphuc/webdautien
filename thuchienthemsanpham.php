<?php
    $connect =mysqli_connect("localhost", "root", "", "quanligaubong");
    if(!$connect){
        exit("kết nối cơ sở dữ liệu không thành công!");
    }
    //$img = $_POST['f_hinh'];
    move_uploaded_file($_FILES['f_hinh']['tmp_name'],'imgs/'.$_FILES['f_hinh']['name']);
    $img = $_FILES['f_hinh']['name'];
    $tensp = $_POST['f_tensanpham'];
    $gia = $_POST['f_gia'];
    $kt = $_POST['f_kichthuoc'];
    $nsx = $_POST['f_nsx'];

    $sql = "INSERT INTO sanpham(hinhanh, tensanpham, giasanpham, kichthuoc, id_nhasanxuat) values('$img','$tensp', $gia, $kt, $nsx)";
    $ketqua = mysqli_query($connect, $sql);

echo" <script>";
    if($ketqua){
        echo "alert(\"thêm thành công\");";
    }else{
        echo "alert(\"thêm không thành công\");";
    }
    echo "window.location = \"index.php\";";    
echo "</script>";
?>