<?php
        session_start();

        require 'connect-select-db.php';

        $tendn = $_POST['tendn'];
        $mk = $_POST['mk'];

        $mk = md5($mk);

        $sql = "SELECT * FROM taikhoan where tenTK = '$tendn'";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                if($mk == $row['matkhauTK']){
                    if($row['capTK'] == "User"){
                        echo 1;
                        $_SESSION['tendn'] = $tendn;
                    }else{
                        echo 2;
                        $_SESSION['tendn'] = $tendn;
                    }
                }else{
                    echo 0;
                    die();
                }
            }
        }else{
            echo 0;
            die();
        }

?>
