<?php
    function del_plant($n){
        require 'connect-select-db.php';

        for($i = 1; $i <= $n; $i++){
            $id = $_POST[$i . 'id_tv'];

            if($id != ''){
                $sql = "SELECT * FROM thucvat where maTV = '$id'";
                $result = $conn->query($sql);

                if($result->num_rows > 0){
                    $sql1 = "DELETE from thucvat where maTV = '$id'";
                    $result1 = $conn->query($sql1);

                    echo nl2br($i . ". Xoá thành công!\n");
                }else{
                    echo nl2br($i . ". Mã thực vật không tồn tại!\n");
                }
            }else{
                echo nl2br($i . ". Vui lòng nhập mã thực vật!\n");
            }
        }
    }
?>

<?php
    function del_animal($n){
        require 'connect-select-db.php';

        for($i = 1; $i <= $n; $i++){
            $id = $_POST[$i . 'id_tv'];

            if($id != ''){
                $sql = "SELECT * FROM dongvat where maDV = '$id'";
                $result = $conn->query($sql);

                if($result->num_rows > 0){
                    $sql1 = "DELETE from dongvat where maDV = '$id'";
                    $result1 = $conn->query($sql1);

                    echo nl2br($i . ". Xoá thành công!\n");
                }else{
                    echo nl2br($i . ". Mã động vật không tồn tại!\n");
                }
            }else{
                echo nl2br($i . ". Vui lòng nhập mã động vật!\n");
            }
        }
    }
?>


<?php
    function del_interior($n){
        require 'connect-select-db.php';

        for($i = 1; $i <= $n; $i++){
            $id = $_POST[$i . 'id_tv'];

            if($id != ''){
                $sql = "SELECT * FROM noithat where maNT = '$id'";
                $result = $conn->query($sql);

                if($result->num_rows > 0){
                    $sql1 = "DELETE from noithat where maNT = '$id'";
                    $result1 = $conn->query($sql1);

                    echo nl2br($i . ". Xoá thành công!\n");
                }else{
                    echo nl2br($i . ". Mã nội thất không tồn tại!\n");
                }
            }else{
                echo nl2br($i . ". Vui lòng nhập mã nội thất!\n");
            }
        }
    }
?>

<?php
    function del_background($n){
        require 'connect-select-db.php';

        for($i = 1; $i <= $n; $i++){
            $id = $_POST[$i . 'id_tv'];

            if($id != ''){
                $sql = "SELECT * FROM boicanh where maBC = '$id'";
                $result = $conn->query($sql);

                if($result->num_rows > 0){
                    $sql1 = "DELETE from boicanh where maBC = '$id'";
                    $result1 = $conn->query($sql1);

                    echo nl2br($i . ". Xoá thành công!\n");
                }else{
                    echo nl2br($i . ". Mã bối cảnh không tồn tại!\n");
                }
            }else{
                echo nl2br($i . ". Vui lòng nhập mã bối cảnh!\n");
            }
        }
    }
?>


<?php
    function del_hair($n){
        require 'connect-select-db.php';

        for($i = 1; $i <= $n; $i++){
            $id = $_POST[$i . 'id_tv'];

            if($id != ''){
                $sql = "SELECT * FROM kieutoc where maKT = '$id'";
                $result = $conn->query($sql);

                if($result->num_rows > 0){
                    $sql1 = "DELETE from kieutoc where maKT = '$id'";
                    $result1 = $conn->query($sql1);

                    echo nl2br($i . ". Xoá thành công!\n");
                }else{
                    echo nl2br($i . ". Mã kiểu tóc không tồn tại!\n");
                }
            }else{
                echo nl2br($i . ". Vui lòng nhập mã kiểu tóc!\n");
            }
        }
    }
?>

<?php
    function del_profession($n){
        require 'connect-select-db.php';

        for($i = 1; $i <= $n; $i++){
            $id = $_POST[$i . 'id_tv'];

            if($id != ''){
                $sql = "SELECT * FROM nghenghiep where maNN = '$id'";
                $result = $conn->query($sql);

                if($result->num_rows > 0){
                    $sql1 = "DELETE from nghenghiep where maNN = '$id'";
                    $result1 = $conn->query($sql1);

                    echo nl2br($i . ". Xoá thành công!\n");
                }else{
                    echo nl2br($i . ". Mã nghề nghiệp không tồn tại!\n");
                }
            }else{
                echo nl2br($i . ". Vui lòng nhập mã nghề nghiệp!\n");
            }
        }
    }
?>

<?php
    function del_implement($n){
        require 'connect-select-db.php';

        for($i = 1; $i <= $n; $i++){
            $id = $_POST[$i . 'id_tv'];

            if($id != ''){
                $sql = "SELECT * FROM vatdung where maVD = '$id'";
                $result = $conn->query($sql);

                if($result->num_rows > 0){
                    $sql1 = "DELETE from vatdung where maVD = '$id'";
                    $result1 = $conn->query($sql1);

                    echo nl2br($i . ". Xoá thành công!\n");
                }else{
                    echo nl2br($i . ". Mã vật dụng không tồn tại!\n");
                }
            }else{
                echo nl2br($i . ". Vui lòng nhập mã vật dụng!\n");
            }
        }
    }
?>


<?php
    function del_costume($n){
        require 'connect-select-db.php';

        for($i = 1; $i <= $n; $i++){
            $id = $_POST[$i . 'id_tv'];

            if($id != ''){
                $sql = "SELECT * FROM trangphuc where maTP = '$id'";
                $result = $conn->query($sql);

                if($result->num_rows > 0){
                    $sql1 = "DELETE from trangphuc where maTP = '$id'";
                    $result1 = $conn->query($sql1);

                    echo nl2br($i . ". Xoá thành công!\n");
                }else{
                    echo nl2br($i . ". Mã trang phục không tồn tại!\n");
                }
            }else{
                echo nl2br($i . ". Vui lòng nhập mã trang phục!\n");
            }
        }
    }
?>


<?php
    function del_dish($n){
        require 'connect-select-db.php';

        for($i = 1; $i <= $n; $i++){
            $id = $_POST[$i . 'id_tv'];

            if($id != ''){
                $sql = "SELECT * FROM monan where maMA = '$id'";
                $result = $conn->query($sql);

                if($result->num_rows > 0){
                    $sql1 = "DELETE from monan where maMA = '$id'";
                    $result1 = $conn->query($sql1);

                    echo nl2br($i . ". Xoá thành công!\n");
                }else{
                    echo nl2br($i . ". Mã món ăn không tồn tại!\n");
                }
            }else{
                echo nl2br($i . ". Vui lòng nhập mã món ăn!\n");
            }
        }
    }
?>

<?php
    session_start();

    require 'connect-select-db.php';
                
    if(!isset($_SESSION['tendn'])){
        echo "Vui lòng đăng nhập!";
        die();
    }

    $tendn = $_SESSION['tendn'];

    $sql2 = "SELECT capTK FROM taikhoan where tenTK = '$tendn'";
    $result2 = $conn->query($sql2);

    if($result2->num_rows > 0){
        while($row = $result2->fetch_assoc()){
            if($row['capTK'] == "User"){
                echo "Bạn không có quyền xoá!";
                die();
            }
        }
    }


    $lc = $_SESSION['lc'];
    
    $n = $_POST['n'];

    if($lc != 'khong'){
        switch($lc){
            case 'thucvat':
                del_plant($n);
                break;
            case 'dongvat':
                del_animal($n);
                break;
            case 'noithat':
                del_interior($n);
                break;
            case 'boicanh':
                del_background($n);
                break;
            case 'kieutoc':
                del_hair($n);
                break;
            case 'nghenghiep':
                del_profession($n);
                break;
            case 'vatdung':
                del_implement($n);
                break;
            case 'trangphuc':
                del_costume($n);
                break;
            case 'monan':
                del_dish($n);
                break;
        }
    }


?>