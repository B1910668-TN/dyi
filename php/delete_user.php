<?php
    session_start();

    require 'connect-select-db.php';

    if(!isset($_SESSION['tendn'])){
        echo "Vui lòng đăng nhập!";
        die();
    }

    $tendn = $_SESSION['tendn'];

    $sql = "SELECT * FROM taikhoan where tenTK ='$tendn'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            if($row['capTK'] == 'Admin'){
                $n = $_POST['n'];

                for($i = 1; $i <= $n; $i++){
                    $id = $_POST[$i . 'id_user'];

                    if($id != ''){
                        if($id == "TK00001"){
                            echo nl2br("Hông pé ơi! Pé không có quyền xoá chủ admin web này đâu!\n");
                        }else{
                            $sql1 = "SELECT * FROM taikhoan where maTK = '$id'";
                            $result1 = $conn->query($sql1);
    
                            if($result1->num_rows > 0){
                                $sql2 = "DELETE from taikhoan where maTK = '$id'";
                                $result2 = $conn->query($sql2);
        
                                while($row = $result1->fetch_assoc()){
                                    if($result2){
                                        echo nl2br($i. ". Xoá thành công người dùng có mã và tên đăng nhập: " . $id . " | " . $row['tenTK'] . "\n");
                                    }else{
                                        echo nl2br("Xoá người dùng thất bại!\n");
                                    }
                                }
                            }else{
                                echo nl2br($i . ". Mã người dùng không tồn tại!\n");
                            }
                        }
                    }else{
                        echo nl2br($i . ". Vui lòng nhập mã người dùng cần xoá!\n");
                    }
                }
            }else{
                echo nl2br("Bạn không có quyền hạn xoá người dùng!\n");
            }
        }
    }
?>