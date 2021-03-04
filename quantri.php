<?php
    session_start();
    if(!isset($_SESSION['hoten'])){
        header('location:dangnhap.html');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản trị</title>
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<?php
    $connect =mysqli_connect("localhost", "root", "", "quanligaubong");
    if(!$connect){
        exit("kết nối cơ sở dữ liệu không thành công!");
    }
    $sql = "SELECT a.id, hinhanh, tensanpham, giasanpham, kichthuoc, tennhasanxuat FROM sanpham a, tennhasanxuat b WHERE a.id_nhasanxuat = b.id";
    $ketqua = mysqli_query($connect, $sql);
?>
<body>
    <div class="container-quantri">
        <h1>Trang quản trị gấu bông</h1>
            <table border="1">
                <tr>
                    <td>#</td>
                    <td>Tên sản phẩm</td>
                    <td>Hình Ảnh</td>
                    <td>Giá sản phẩm</td>
                    <td>Kích thước</td>
                    <td>Tên nhà sản xuất</td>
                    <td><a class="nut" href="form.php">Thêm sản phẩm</a></td>
                </tr>
                <?php
                $i=1;
                    while($row = mysqli_fetch_array($ketqua)){
                        echo "<tr>";
                            echo "<td>".$i."</td>";
                            echo "<td>".$row['tensanpham']."</td>";
                            echo "<td><img src=\"imgs\\".$row['hinhanh']."\"width =\"50px\"></td>";
                            echo "<td>".$row['giasanpham']."</td>";
                            echo "<td>".$row['kichthuoc']."</td>";
                            echo "<td>".$row['tennhasanxuat']."</td>";
                            echo "<td><a onclick=\"return confirm('Bạn có chắc xoá không?')\" class=\"nut\" href=\"xoa.php?idxoa=".$row['id']."\">Xoá</a><a class=\"nut\" href=\"sua.php?idsua=".$row['id']."\">Sửa</a></td>";
                        echo "</tr>"; 
                        $i++;
                    }
                ?>
            </table>
    </div>
</body>
</html>

