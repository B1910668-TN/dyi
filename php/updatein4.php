<?php
    session_start();

    require 'connect-select-db.php';

    $uid = $_POST['uid'];
    $tentv = $_POST['tentv'];
    $email = $_POST['email'];
 
    $sql = "SELECT * FROM thanhvien where maTK = '$uid'";
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()){
        if($tentv == $row['tenTV'] && $email == $row['email']){
            echo 0;
        }else{
            $sql1 = "UPDATE thanhvien SET tenTV = '$tentv', email ='$email' where maTK ='$uid'";
            $result1 = $conn->query($sql1);
            if($result1){
                echo 1;
            }else{
                echo 2;
            }
        }
    }    
?>