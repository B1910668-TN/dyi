<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý đăng ký</title>
    <style>
        div.tj{
            color: white;
            text-align: center;
            font-size: 14px;
            text-shadow: black 0.1px 0.1px 0.2px;
        }
    </style>
</head>
<body>
    <?php
        require "connect-select-db.php";

        // lay du lieu tu
        $tendangnhap = $_POST["tendn"];
        $matkhau = $_POST["mk"];
        $xacnhanmk = $_POST["rmk"];
        $hoten = $_POST["hoten"];
        $ngaysinh = $_POST["ngaysinh"];
        $gioitinh = $_POST["sex"];
        $email  = $_POST["email"];

        if($tendangnhap == '' || $matkhau == '' || $xacnhanmk == '' || 
            $hoten == '' || $ngaysinh == '' || $gioitinh == '' || $email == ''){
                echo "Vui lòng điền đủ thông tin!";
                die();
        }

        //Kiếm tra tên đăng nhập đã tồn tại hay chưa
        $sql1 = "SELECT tenTK from taikhoan where tentk = '$tendangnhap'";
        $result1 = $conn->query($sql1)
            or die("Query failed: " . $conn->error);
        if($result1->num_rows > 0){
            echo "<div class='tj'>Tên đăng nhập đã tồn tại!</div>";
            die();
        }

        //Mã hoá mật khẩu
        $matkhau = md5($matkhau);
        $xacnhanmk = md5($xacnhanmk);

        // Confirm password
        if($matkhau === $xacnhanmk){
            echo "";
        }else{
            echo "<div class='tj'>Mật khẩu không trùng khớp</div>";
            die();
        }

        //Kiểm tra email đã tồn tại hay chưa

        $sql2 = "SELECT email from thanhvien where email = '$email'";
        $result2 = $conn->query($sql2)
            or die("Query failed: " . $conn->error);
        if($result2->num_rows > 0){
            echo "<div class='tj'>Email đã được dùng!</div>";
            die();
        }

        //Lưu thông tin vào thanhvien
        $sql3 = "INSERT INTO taikhoan(tenTK, matkhauTK) value ('$tendangnhap','$matkhau')";
        $sql4 = "INSERT INTO thanhvien(tenTV, nsinh, gtinh, email) value ('$hoten','$ngaysinh', '$gioitinh', '$email')"; 
        
        $result3 = $conn->query($sql3);
        $result4 = $conn->query($sql4);

        $sql5 = "update thanhvien set maTK = (SELECT maTK from taikhoan where tenTK = '$tendangnhap') where email = '$email'";
        $result5 = $conn->query($sql5);

        if($result3 === TRUE && $result4 === TRUE){
            echo "<div>Đăng ký thành công!</div>";
        }else{
            echo "<div>Đăng ký thất bại!</div>";
        }
    ?>
</body>
</html>