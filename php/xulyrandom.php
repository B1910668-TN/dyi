<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/xlrd.css">
</head>
<body>
    <?php
        function thucvat($tv, $n, $count){
            require 'connect-select-db.php';
            if($tv != 'khong'){
                if($tv != 'khactv'){
                    $sql = "SELECT * FROM thucvat where loaiTV = '$tv' ORDER BY RAND() LIMIT $n";
                    $result = $conn->query($sql);
                }else{
                    $sql = "SELECT * FROM thucvat ORDER BY RAND() LIMIT $n";
                    $result = $conn->query($sql);
                }
                echo "<h3>Thực vật</h3>";
                echo "<table border='1'>
                    <tr>
                        <th>STT</th>
                        <th>Tên thực vật</th>
                        <th>Ý nghĩa</th>
                        <th>Câu chuyện</th>
                        <th>Hình ảnh</th>
                        <th>Link</th>
                        <th>Người thêm</th>
                    </tr>
                ";
                while($row = $result->fetch_assoc()){
                    echo "
                        <tr>
                            <td>". $count. "</td>
                            <td>" . $row['tenTV'] . "</td>
                            <td>" . $row['ynghia'] ."</td>
                            <td>" . $row['cauchuyen'] ."</td>
                            <td>
                    ";
                    if($row['hinhanh'] != "Không"){
                ?>
                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['hinhanh']); ?>" width="300" height="200"/> 
                <?php
                    }else{
                        echo $row['hinhanh'];
                    }
                    echo "  
                            </td>
                            <td>" . $row['link'] ."</td>
                            <td>" . $row['tenTK'] ."</td>
                        </tr>
                    ";                       
                    $count++;         
                }
                echo "</table>";                
            }else{
                echo "Vui lòng chọn phân cấp nhỏ bên trong khung thực vật ngoại trừ 'không chọn'!<br>";
            }    
        }

        function dongvat($dv, $n, $count){
            require 'connect-select-db.php';

            if($dv != 'khong'){
                if($dv != 'khacdv'){
                    $sql= "SELECT * FROM dongvat where lopDV = '$dv' ORDER BY RAND() LIMIT $n";
                    $result = $conn->query($sql);
                }else{
                    $sql = "SELECT * FROM dongvat ORDER BY RAND() LIMIT $n";
                    $result = $conn->query($sql);
                }
                echo "<h3>Động vật</h3>";
                echo "<table border='1'>
                    <tr>
                        <th>STT</th>
                        <th>Tên động vật</th>
                        <th>Ý nghĩa</th>
                        <th>Câu chuyện</th>
                        <th>Link</th>
                        <th>Người thêm</th>
                    </tr>
                ";
                while($row = $result->fetch_assoc()){
                    echo "
                        <tr>
                            <td>". $count. "</td>
                            <td>" . $row['tenDV'] . "</td>
                            <td>" . $row['ynghia'] ."</td>
                            <td>" . $row['cauchuyen'] ."</td>
                            <td>" . $row['link'] ."</td>
                            <td>" . $row['tenTK'] ."</td>
                        </tr>
                    ";                       
                    $count++;         
                }
                echo "</table>";
            }else{
                echo "Vui lòng chọn phân cấp nhỏ bên trong khung động vật ngoại trừ 'không chọn'!<br>";
            }
        }

        function noithat($nt, $n, $count){
            require 'connect-select-db.php';

            if($nt != 'khong'){
                if($nt != 'khacnt'){
                    $sql = "SELECT * FROM noithat where lopNT = '$nt' ORDER BY RAND() LIMIT $n";
                    $result = $conn->query($sql);
                }else{
                    $sql = "SELECT * FROM noithat ORDER BY RAND() LIMIT $n";
                    $result = $conn->query($sql);
                }
                echo "<h3>Nội thất</h3>";
                echo "<table border='1'>
                    <tr>
                        <th>STT</th>
                        <th>Tên nội thất</th>
                        <th>Người thêm</th>
                    </tr>
                ";
                while($row = $result->fetch_assoc()){
                    echo "
                        <tr>
                            <td>". $count. "</td>
                            <td>" . $row['tenNT'] . "</td>
                            <td>" . $row['tenTK'] ."</td>
                        </tr>
                    ";                       
                    $count++;         
                }
                echo "</table>";
            }else{
                echo "Vui lòng chọn phân cấp nhỏ bên trong khung nội thất ngoại trừ 'không chọn'!<br>";
            }
        }

        function boicanh($n, $count){
            require 'connect-select-db.php';

            $sql = "SELECT * FROM boicanh ORDER BY RAND() LIMIT $n";
            $result = $conn->query($sql);
            echo "<h3>Bối cảnh</h3>";
            echo "<table border='1'>
                <tr>
                    <th>STT</th>
                    <th>Tên bối cảnh</th>
                    <th>Người thêm</th>
                </tr>
            ";
            while($row = $result->fetch_assoc()){
                echo "
                    <tr>
                        <td>". $count. "</td>
                        <td>" . $row['tenBC'] . "</td>
                        <td>" . $row['tenTK'] ."</td>
                    </tr>
                ";                       
                $count++;  
            }
            echo "</table>";

        }

        function gioitinh($count){
            require 'connect-select-db.php';

            $sql = "SELECT * FROM gioitinh ORDER BY RAND() LIMIT 1";
            $result = $conn->query($sql);
            echo "<h3>Giới tính</h3>";
            echo "<table border='1'>
                <tr>
                    <th>STT</th>
                    <th>Giới tính</th>
                </tr>
            ";
            while($row = $result->fetch_assoc()){
                echo "
                    <tr>
                        <td>". $count. "</td>
                        <td>" . $row['tenGT'] . "</td>
                    </tr>
                ";                       
                $count++;  
            }
            echo "</table>";
        }

        function kieutoc($n, $count){
            require 'connect-select-db.php';

            $sql = "SELECT * FROM kieutoc ORDER BY RAND() LIMIT $n";
            $result = $conn->query($sql);
            echo "<h3>Kiểu tóc</h3>";
            echo "<table border='1'>
                <tr>
                    <th>STT</th>
                    <th>Tên kiểu tóc</th>
                    <th>Người thêm</th>
                </tr>
            ";
            while($row = $result->fetch_assoc()){
                echo "
                    <tr>
                        <td>". $count. "</td>
                        <td>" . $row['tenKT'] . "</td>
                        <td>" . $row['tenTK'] ."</td>
                    </tr>
                ";                       
                $count++;  
            }
            echo "</table>";
        }

        function mua($count){
            require 'connect-select-db.php';

            $sql = "SELECT * FROM mua ORDER BY RAND() LIMIT 1";
            $result = $conn->query($sql);
            echo "<h3>Mùa</h3>";
            echo "<table border='1'>
                    <tr>
                        <th>STT</th>
                        <th>Mùa</th>
                    </tr>
            ";
            while($row = $result->fetch_assoc()){
                echo "
                    <tr>
                        <td>". $count. "</td>
                        <td>" . $row['tenM'] . "</td>
                    </tr>
                ";                       
                $count++;  
            }
            echo "</table>";
        }

        function nghenghiep($n, $count){
            require 'connect-select-db.php';

            $sql = "SELECT * FROM nghenghiep ORDER BY RAND() LIMIT $n";
            $result = $conn->query($sql);
            echo "<h3>Nghề nghiệp</h3>";
            echo "<table border='1'>
                <tr>
                    <th>STT</th>
                    <th>Tên nghề nghiệp</th>
                    <th>Người thêm</th>
                </tr>
            ";
            while($row = $result->fetch_assoc()){
                echo "
                    <tr>
                        <td>". $count. "</td>
                        <td>" . $row['tenNN'] . "</td>
                        <td>" . $row['tenTK'] ."</td>
                    </tr>
                ";                       
                $count++;  
            }
            echo "</table>";
        }

        function vatdung($n, $count){
            require 'connect-select-db.php';

            $sql = "SELECT * FROM vatdung ORDER BY RAND() LIMIT $n";
            $result = $conn->query($sql);
            echo "<h3>Vật dụng</h3>";
            echo "<table border='1'>
                <tr>
                    <th>STT</th>
                    <th>Tên vật dụng</th>
                    <th>Người thêm</th>
                </tr>
            ";
            while($row = $result->fetch_assoc()){
                echo "
                    <tr>
                        <td>". $count. "</td>
                        <td>" . $row['tenVD'] . "</td>
                        <td>" . $row['tenTK'] ."</td>
                    </tr>
                ";                       
                $count++;  
            }
            echo "</table>";
        }

        function trangphuc($n, $count){
            require 'connect-select-db.php';

            $sql = "SELECT * FROM trangphuc ORDER BY RAND() LIMIT $n";
            $result = $conn->query($sql);
            echo "<h3>Trang phục</h3>";
            echo "<table border='1'>
                <tr>
                    <th>STT</th>
                    <th>Tên trang phục</th>
                    <th>Quốc gia</th>
                    <th>Người thêm</th>
                </tr>
            ";
            while($row = $result->fetch_assoc()){
                echo "
                    <tr>
                        <td>". $count. "</td>
                        <td>" . $row['tenTP'] . "</td>
                        <td>" . $row['tenQG'] . "</td>
                        <td>" . $row['tenTK'] ."</td>
                    </tr>
                ";                       
                $count++;  
            }
            echo "</table>";    
        }

        function monan($n, $count){
            require 'connect-select-db.php';

            $sql = "SELECT * FROM monan ORDER BY RAND() LIMIT $n";
            $result = $conn->query($sql);
            echo "<h3>Món ăn</h3>";
            echo "<table border='1'>
                <tr>
                    <th>STT</th>
                    <th>Tên món ăn</th>
                    <th>Người thêm</th>
                </tr>
            ";
            while($row = $result->fetch_assoc()){
                echo "
                    <tr>
                        <td>". $count. "</td>
                        <td>" . $row['tenMA'] . "</td>
                        <td>" . $row['tenTK'] ."</td>
                    </tr>
                ";                       
                $count++;  
            }
            echo "</table>";
        }

        require 'connect-select-db.php';

        $tv = $_POST['tv'];
        $dv = $_POST['dv'];
        $nt = $_POST['nt'];
        $n = $_POST['soluong'];
        $count = 1;

        if(!isset($_POST['luachon'])){
            echo "Vui lòng chọn ít nhất một ô vuông!";
        }
        if(isset($_POST['luachon'])){
            if(is_array($_POST['luachon'])){
                if($n > 0 && $n <= 5){
                    foreach($_POST['luachon'] as $value){
                        switch($value){
                            case 'thucvat':
                                thucvat($tv,$n,$count);
                                break;
                            case 'dongvat':
                                dongvat($dv,$n,$count);
                                break;
                            case 'noithat':
                                noithat($nt,$n,$count);
                                break;
                            case 'boicanh':
                                boicanh($n, $count);
                                break;
                            case 'gioitinh':
                                gioitinh($count);
                                break;
                            case 'kieutoc':
                                kieutoc($n,$count);
                                break;
                            case 'mua':
                                mua($count);
                                break;
                            case 'nghenghiep':
                                nghenghiep($n,$count);
                                break;
                            case 'vatdung':
                                vatdung($n,$count);
                                break;
                            case 'trangphuc':
                                trangphuc($n,$count);
                                break;
                            case 'monan':
                                monan($n,$count);
                                break;    
                        }
                    }
                }else{
                    echo "Vui lòng chọn số lượng từ 1 -> 5";
                }
            }
        }
    ?>
</body>
</html>