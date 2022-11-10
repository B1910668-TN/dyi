<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        function thucvat($tim){
            require 'connect-select-db.php';
            $sql = "SELECT * FROM thucvat WHERE tenTV LIKE '%{$tim}%'";
            $result = $conn->query($sql);

            if($result->num_rows > 0){?>
                <h3>Thực vật</h3>
                <table style = "margin: 0px auto 0px auto;" border='1'>
                    <tr>
                        <th>Mã thực vật</th>
                        <th>Tên thực vật</th>
                        <th>Ý nghĩa</th>
                        <th>Câu chuyện</th>
                        <th>Hình ảnh</th>
                        <th>Link</th>
                        <th>Loại thực vật</th>
                        <th>Người thêm</th>
                    </tr>
                    <?php       
                        while($row = $result->fetch_assoc()){
                            $id = $row['maTV'];                            
                            $ten = $row['tenTV'];                            
                            $ynghia = $row['ynghia'];                            
                            $cauchuyen = $row['cauchuyen'];                                                       
                            $link = $row['link'];
                            $loai = $row['loaiTV'];                          
                            $nguoithem = $row['tenTK'];                            
                    ?>
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td style="text-align: left;"><?php echo $ten; ?></td>
                        <td style="text-align: left;"><?php echo $ynghia; ?></td>
                        <td style="text-align: left;"><?php echo $cauchuyen; ?></td>
                        <td style="padding: 10px 10px 10px 10px">
                    <?php
                        if($row['hinhanh'] == "Không"){
                            echo $row['hinhanh'];
                        }else{     
                    ?>
                            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['hinhanh']); ?>" width="300" height="200"/> 
                        </td>
                    <?php
                        }
                    ?>
                        <td><?php echo $link; ?></td>
                        <?php
                            switch($loai){
                                case "hoa":
                                    $loai = "Hoa";
                                    break;
                                case "traicay":
                                    $loai = "Trái cây";
                                    break;
                                case "cu":
                                    $loai = "Củ";
                                    break;
                            }
                        ?>
                        <td><?php echo $loai; ?></td>
                        <td><?php echo $nguoithem; ?></td>
                    </tr>
            <?php
                        }
            ?>
                </table>
            <?php
            }else{
                echo "Không có kết quả!";
            }
        }

        function dongvat($tim){
            require 'connect-select-db.php';
            $sql = "SELECT * FROM dongvat WHERE tenDV LIKE '%{$tim}%'";
            $result = $conn->query($sql);

            if($result->num_rows > 0){?>
                <h3>Động vật</h3>
                <table style = "margin: 0px auto 0px auto" border='1'>
                    <tr>
                        <th>Mã động vật</th>
                        <th>Tên động vật</th>
                        <th>Ý nghĩa</th>
                        <th>Câu chuyện</th>
                        <th>Hình ảnh</th>
                        <th>Link</th>
                        <th>Lớp động vật</th>
                        <th>Người thêm</th>
                    </tr>
                    <?php       
                        while($row = $result->fetch_assoc()){
                            $id = $row['maDV'];                            
                            $ten = $row['tenDV'];                            
                            $ynghia = $row['ynghia'];                            
                            $cauchuyen = $row['cauchuyen'];                                                     
                            $link = $row['link'];
                            $loai = $row['lopDV'];                          
                            $nguoithem = $row['tenTK'];                            
                    ?>
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td style="text-align: left;"><?php echo $ten; ?></td>
                        <td style="text-align: left;"><?php echo $ynghia; ?></td>
                        <td style="text-align: left;"><?php echo $cauchuyen; ?></td>
                        <td style="padding: 10px 10px 10px 10px">
                        <?php
                            if($row['hinhanh'] == "Không"){
                                echo $row['hinhanh'];
                            }else{     
                        ?>
                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['hinhanh']); ?>" width="300" height="200"/> 
                            </td>
                        <?php
                            }
                        ?>
                        <td style="text-align: left;"><?php echo $link; ?></td>
                        <?php
                            switch($loai){
                                case "chim":
                                    $loai = "Chim";
                                    break;
                                case "ca":
                                    $loai = "Cá";
                                    break;
                                case "giapxac":
                                    $loai = "Giáp xác";
                                    break;
                                case "hinhnhen":
                                    $loai = "Hình nhện";
                                    break;
                                case "saubo":
                                    $loai = "Sâu bọ";
                                    break;
                                case "bosat":
                                    $loai = "Bò sát";
                                    break;
                                case "thu":
                                    $loai = "Thú";
                                    break;
                                case "khacdv":
                                    $loai = "Khác";
                                    break;
                            }
                        ?>
                        <td><?php echo $loai; ?></td>
                        <td><?php echo $nguoithem; ?></td>
                    </tr>
            <?php
                        }
            ?>
                </table>
            <?php
            }else{
                echo "Không có kết quả!";
            }
        }

        function noithat($tim){
            require 'connect-select-db.php';
            $sql = "SELECT * FROM noithat WHERE tenNT LIKE '%{$tim}%'";
            $result = $conn->query($sql);

            if($result->num_rows > 0){?>
                <h3>Nội thất</h3>
                <table style = "margin: 0px auto 0px auto" border='1'>
                    <tr>
                        <th>Mã nội thất</th>
                        <th>Tên nội thất</th>
                        <th>Loại nội thất</th>
                        <th>Người thêm</th>
                    </tr>
                    <?php       
                        while($row = $result->fetch_assoc()){
                            $id = $row['maNT'];                            
                            $ten = $row['tenNT'];                            
                            $loai = $row['lopNT'];                          
                            $nguoithem = $row['tenTK'];                        
                    ?>
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $ten; ?></td>
                        <?php
                            switch($loai){
                                case "ban":
                                    $loai = "Bàn";
                                    break;
                                case "ghe":
                                    $loai = "Ghế";
                                    break;
                                case "tu":
                                    $loai = "Tủ";
                                    break;
                                case "den":
                                    $loai = "Đèn";
                                    break;
                            }
                        ?>
                        <td><?php echo $loai; ?></td>
                        <td><?php echo $nguoithem; ?></td>
                    </tr>
            <?php
                        }
            ?>
                </table>
            <?php
            }else{
                echo "Không có kết quả!";
            }
        }

        function boicanh($tim){
            require 'connect-select-db.php';
            $sql = "SELECT * FROM boicanh WHERE tenBC LIKE '%{$tim}%'";
            $result = $conn->query($sql);

            if($result->num_rows > 0){?>
                <h3>Bối cảnh</h3>
                <table style = "margin: 0px auto 0px auto" border='1'>
                    <tr>
                        <th>Mã bối cảnh</th>
                        <th>Tên bối cảnh</th>
                        <th>Người thêm</th>
                    </tr>
                    <?php       
                        while($row = $result->fetch_assoc()){
                            $id = $row['maBC'];                            
                            $ten = $row['tenBC'];                                                    
                            $nguoithem = $row['tenTK'];                             
                    ?>
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $ten; ?></td>
                        <td><?php echo $nguoithem; ?></td>
                    </tr>
            <?php
                        }
            ?>
                </table>
            <?php
            }else{
                echo "Không có kết quả!";
            }
        }

        function kieutoc($tim){
            require 'connect-select-db.php';
            $sql = "SELECT * FROM kieutoc WHERE tenKT LIKE '%{$tim}%'";
            $result = $conn->query($sql);

            if($result->num_rows > 0){?>
                <h3>Kiểu tóc</h3>
                <table style = "margin: 0px auto 0px auto" border='1'>
                    <tr>
                        <th>Mã kiểu tóc</th>
                        <th>Tên kiểu tóc</th>
                        <th>Hình ảnh</th>
                        <th>Người thêm</th>
                    </tr>
                    <?php       
                        while($row = $result->fetch_assoc()){
                            $id = $row['maKT'];                            
                            $ten = $row['tenKT'];                                                    
                            $nguoithem = $row['tenTK'];                            
                    ?>
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $ten; ?></td>
                        <td style="padding: 10px 10px 10px 10px">
                        <?php
                            if($row['hinhanh'] == "Không"){
                                echo $row['hinhanh'];
                            }else{     
                        ?>
                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['hinhanh']); ?>" width="300" height="200"/> 
                            </td>
                        <?php
                            }
                        ?>
                        <td><?php echo $nguoithem; ?></td>
                    </tr>
            <?php
                        }
            ?>
                </table>
            <?php
            }else{
                echo "Không có kết quả!";
            }
        }

        function nghenghiep($tim){
            require 'connect-select-db.php';
            $sql = "SELECT * FROM nghenghiep WHERE tenNN LIKE '%{$tim}%'";
            $result = $conn->query($sql);

            if($result->num_rows > 0){?>
                <h3>Nghề nghiệp</h3>
                <table style = "margin: 0px auto 0px auto" border='1'>
                    <tr>
                        <th>Mã nghề nghiệp</th>
                        <th>Tên nghề nghiệp</th>
                        <th>Người thêm</th>
                    </tr>
                    <?php       
                        while($row = $result->fetch_assoc()){
                            $id = $row['maNN'];                            
                            $ten = $row['tenNN'];                                                    
                            $nguoithem = $row['tenTK'];                          
                    ?>
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $ten; ?></td>
                        <td><?php echo $nguoithem; ?></td>
                    </tr>
            <?php
                        }
            ?>
                </table>
            <?php
            }else{
                echo "Không có kết quả!";
            }
        }

        function vatdung($tim){
            require 'connect-select-db.php';
            $sql = "SELECT * FROM vatdung WHERE tenVD LIKE '%{$tim}%'";
            $result = $conn->query($sql);

            if($result->num_rows > 0){?>
                <h3>Vật dụng</h3>
                <table style = "margin: 0px auto 0px auto" border='1'>
                    <tr>
                        <th>Mã vật dụng</th>
                        <th>Tên vật dụng</th>
                        <th>Người thêm</th>
                    </tr>
                    <?php       
                        while($row = $result->fetch_assoc()){
                            $id = $row['maVD'];                            
                            $ten = $row['tenVD'];                                                    
                            $nguoithem = $row['tenTK'];                       
                    ?>
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $ten; ?></td>
                        <td><?php echo $nguoithem; ?></td>
                    </tr>
            <?php
                        }
            ?>
                </table>
            <?php
            }else{
                echo "Không có kết quả!";
            }
        }

        function trangphuc($tim){
            require 'connect-select-db.php';
            $sql = "SELECT * FROM trangphuc WHERE tenTP LIKE '%{$tim}%'";
            $result = $conn->query($sql);

            if($result->num_rows > 0){?>
                <h3>Trang phục</h3>
                <table style = "margin: 0px auto 0px auto" border='1'>
                    <tr>
                        <th>Mã trang phục</th>
                        <th>Tên trang phục</th>
                        <th>Hình ảnh</th>
                        <th>Quốc gia</th>
                        <th>Người thêm</th>
                    </tr>
                    <?php       
                        while($row = $result->fetch_assoc()){
                            $id = $row['maTP'];                            
                            $ten = $row['tenTP'];                                                    
                            $qg = $row['tenQG'];                                                    
                            $nguoithem = $row['tenTK'];                            
                    ?>
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $ten; ?></td>
                        <td style="padding: 10px 10px 10px 10px">
                        <?php
                            if($row['hinhanh'] == "Không"){
                                echo $row['hinhanh'];
                            }else{     
                        ?>
                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['hinhanh']); ?>" width="300" height="200"/> 
                            </td>
                        <?php
                            }
                        ?>
                        <td><?php echo $qg; ?></td>
                        <td><?php echo $nguoithem; ?></td>
                    </tr>
            <?php
                        }
            ?>
                </table>
            <?php
            }else{
                echo "Không có kết quả!";
            }
        }

        function monan($tim){
            require 'connect-select-db.php';
            $sql = "SELECT * FROM monan WHERE tenMA LIKE '%{$tim}%'";
            $result = $conn->query($sql);

            if($result->num_rows > 0){?>
                <h3>Món ăn</h3>
                <table style = "margin: 0px auto 0px auto" border='1'>
                    <tr>
                        <th>Mã món ăn</th>
                        <th>Tên món ăn</th>
                        <th>Người thêm</th>
                    </tr>
                    <?php       
                        while($row = $result->fetch_assoc()){
                            $id = $row['maMA'];                            
                            $ten = $row['tenMA'];                                                    
                            $nguoithem = $row['tenTK'];                            
                    ?>
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $ten; ?></td>
                        <td><?php echo $nguoithem; ?></td>
                    </tr>
            <?php
                        }
            ?>
                </table>
            <?php
            }else{
                echo "Không có kết quả!";
            }
        }

        if(isset($_POST['tim'])){
            require 'connect-select-db.php';

            $tim = $_POST['tim'];
            $lc = $_POST['lc'];
    
            if($lc != "khong"){
                switch($lc){
                    case "thucvat":
                        thucvat($tim);
                        break;
                    case "dongvat":
                        dongvat($tim);
                        break;
                    case "noithat":
                        noithat($tim);
                        break;
                    case "boicanh":
                        boicanh($tim);
                        break;
                    case "kieutoc":
                        kieutoc($tim);
                        break;
                    case "nghenghiep":
                        nghenghiep($tim);
                        break;
                    case "vatdung":
                        vatdung($tim);
                        break;
                    case "trangphuc":
                        trangphuc($tim);
                        break;
                    case "monan":
                        monan($tim);
                        break;
                }
            }else{
                echo "Vui lòng chọn mục cần tìm!";
            }
        }

?>
</body>
</html>