<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Document</title>
</head>
<?php
    $connect =mysqli_connect("localhost", "root", "", "quanligaubong");
    if(!$connect){
        exit("kết nối cơ sở dữ liệu không thành công!");
    }
    $sql = "SELECT id , tennhasanxuat FROM tennhasanxuat";
    $ketqua = mysqli_query($connect, $sql);
?>
<body>
    <div class="container">
        <h1>FORM THÊM SẢN PHẨM</h1>
        <form action="thuchienthemsanpham.php" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Chọn hình ảnh</td>
                    <td><input type="file" name="f_hinh" required></td>
                </tr>
                <tr>
                    <td>tên sản phẩm</td>
                    <td><input type="text" name="f_tensanpham" required></td>
                </tr>
                <tr>
                    <td>Giá: </td>
                    <td><input type="number" name="f_gia" required></td>
                </tr>
                <tr>
                    <td>Kích thước: </td>
                    <td><input type="number" name="f_kichthuoc" required></td>
                </tr>
                <tr>
                    <td>Nhà sản xuất: </td>
                    <td>
                        <select name="f_nsx" id="">
                            <?php
                                while($row = mysqli_fetch_array($ketqua)){
                                    echo" <option value=\"".$row['id']."\">".$row['tennhasanxuat']."</option>";
                                }
                            ?>   
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value="thêm sản phẩm"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>