<?php
    function inSanPham($img, $tensp, $gia, $kt, $nhasanxuat){
        echo "<div class=\"col-4\">";
        echo "<div class=\"item\">";
            echo "<div class=\"front\">";
                echo "<img src=\"imgs\\".$img."\" alt=\"\">";
                echo "<div class=\"info\">";
                    echo "<h3>".$tensp."</h3>";
                    echo "<h3>Nhà sản xuất: ".$nhasanxuat."</h3>";
                    echo "<p class=\"price\">Giá: ".$gia."đ</p>";
                    echo "<a href=\"\" class=\"size\">".$kt."cm</a>";
                    echo "<a href=\"\" class=\"size\">".$kt."cm</a>";
                echo "</div>";    
            echo "</div>";
            echo "<div class=\"back\">";
                echo "<a href=\"\" class=\"card\">MUA HÀNG</a>";
                    echo "<div class=\"social\">";
                        echo "<a href=\"\" class=\"like\">Like: 900</a>";
                        echo "<a href=\"\" class=\"dislike\">Dislike: 100</a>";
                        echo "<a href=\"\" class=\"view\">Lượt xem: 1000</a>";
                    echo "</div>";
            echo "</div>";
        echo "</div>";
    echo "</div>";
    }
?>