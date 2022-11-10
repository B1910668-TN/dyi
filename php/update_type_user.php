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
                $m = $_POST['m'];
                
                for($i = 1; $i <= $m; $i++){
                    $id = $_POST[$i . 'id_user'];
                    $captk = $_POST[$i . 'captk'];

                    if($id != ''){
                        if($id == "TK00001"){
                            echo nl2br("Hông pé ơi! Pé không có quyền cập nhật lại quyền của chủ admin web này đâu!\n");
                        }else{
                            $sql1 = "SELECT * FROM taikhoan where maTK = '$id'";
                            $result1 = $conn->query($sql1);
    
                            if($result1->num_rows > 0){
                                if($captk != "khong"){
                                    $sql2 = "UPDATE taikhoan SET capTK = '$captk' where maTK = '$id'";
                                    $result2 = $conn->query($sql2);
            
                                    while($row = $result1->fetch_assoc()){
                                        if($result2){
                                            echo nl2br($i. ". Cập nhật thành công cấp " .$captk. " cho người dùng có mã và tên đăng nhập: " . $id . " | " . $row['tenTK'] . "\n");
                                        }else{
                                            echo nl2br("Cập nhật thất bại người dùng thất bại!\n");
                                        }
                                    }
                                }else{
                                    echo nl2br($i . ". Vui lòng chọn cấp người dùng cần cập nhật!\n");
                                }
                            }else{
                                echo nl2br($i . ". Mã người dùng không tồn tại!\n");
                            }
                        }
                    }else{
                        echo nl2br($i . ". Vui lòng nhập mã người dùng cần cập nhật!\n");
                    }
                }
            }else{
                echo nl2br("Bạn không có quyền hạn cập nhật cấp tài khoản của người dùng!\n");
            }
        }
    }
?>