<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="form.css">
    <title>Document</title>
</head>
<?php
    $connect =mysqli_connect("localhost", "root", "", "quanligaubong");
    if(!$connect){
        exit("kết nối cơ sở dữ liệu không thành công!");
    }
    $sql = "SELECT id , tennhasanxuat FROM tennhasanxuat";
    $ketqua = mysqli_query($connect, $sql);
    $id_cansua = $_GET['idsua'];
    $sql1 = "SELECT a.id, hinhanh, tensanpham, giasanpham, kichthuoc, id_nhasanxuat, tennhasanxuat FROM sanpham a, tennhasanxuat b WHERE a.id_nhasanxuat = b.id and a.id = $id_cansua";
    $ketqua1 = mysqli_query($connect, $sql1);
    $row1 = mysqli_fetch_array($ketqua1)
?>
<body>
    <div class="container">
        <h1>FORM CẬP NHẬT SẢN PHẨM</h1>
        <form action="thuchiencapnhatsanpham.php" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Chọn hình ảnh</td>
                    <td><input type="file" name="f_hinh" onchange="showImage(this)"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <img id="hinhtam" src="imgs/<?php echo $row1['hinhanh']; ?>" width="50px" height="50px" alt="">
                    </td>    
                </tr>
                <tr>
                    <td>Tên sản phẩm</td>
                    <td><input type="text" name="f_tensanpham" required value ="<?php echo $row1['tensanpham']; ?>"></td>
                </tr>
                <tr>
                    <td>Giá: </td>
                    <td><input type="number" name="f_gia" value ="<?php echo $row1['giasanpham']; ?>"></td>
                </tr>
                <tr>
                    <td>Kích thước: </td>
                    <td><input type="number" name="f_kichthuoc" value ="<?php echo $row1['kichthuoc']; ?>"></td>
                </tr>
                <tr>
                    <td>Nhà sản xuất: </td>
                    <td>
                        <select name="f_nsx" id="">
                            <?php
                                while($row = mysqli_fetch_array($ketqua)){
                                    echo"<option value=\"".$row['id']."\"";
                                        if($row['id'] == $row1['id_nhasanxuat']) {
                                            echo "selected";
                                        }
                                    echo">".$row['tennhasanxuat']."</option>";
                                }
                            ?>   
                        </select>
                    </td>
                </tr>
                <tr>
                    <input type="hidden" name="hinhcu" value ="<?php echo $row1['hinhanh']; ?>">
                    <input type="hidden" name="idsua" value ="<?php echo $row1['id']; ?>">
                    <td><input type="submit" value="Cập nhật sản phẩm"></td>
                </tr>
            </table>
        </form>
    </div>
    <script>
        function showImage(t){
            document.getElementById('hinhtam').src = window.URL.createObjectURL(t.files[0]);
        }
    </script>
</body>
</html>