<?php
    $connect =mysqli_connect("localhost", "root", "", "quanligaubong");
    if(!$connect){
        exit("kết nối cơ sở dữ liệu không thành công!");
    }
    if(!empty($_FILES['f_hinh']['tmp_name'])){
        move_uploaded_file($_FILES['f_hinh']['tmp_name'],'imgs/'.$_FILES['f_hinh']['name']);
        $img = $_FILES['f_hinh']['name'];
    }else{
        $img = $_POST['hinhcu'];
    }    

    $tensp = $_POST['f_tensanpham'];
    $gia = $_POST['f_gia'];
    $kt = $_POST['f_kichthuoc'];
    $nsx = $_POST['f_nsx'];

    $idcansua = $_POST['idsua'];

    $sql = "UPDATE sanpham set hinhanh = '$img', tensanpham = '$tensp', giasanpham = $gia, kichthuoc = $kt, id_nhasanxuat = '$nsx' WHERE id = $idcansua";
    $ketqua = mysqli_query($connect, $sql);

echo" <script>";
    if($ketqua){
        echo "alert(\"Cập nhật thành công\");";
    }else{
        echo "alert(\"Cập nhật không thành công\");";
    }
    echo "window.location = \"quantri.php\";";    
echo "</script>";
?>