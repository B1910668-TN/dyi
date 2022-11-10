<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="../css/in4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <?php
            session_start();

            if(!isset($_SESSION['tendn'])){
                die();
            }

            require 'connect-select-db.php';

            $tendn = $_SESSION['tendn'];
            $sql = "SELECT * FROM taikhoan where tenTK = '$tendn'";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $uid = $row['maTK'];
                    $tendn = $row['tenTK'];
                    $mk = $row['matkhauTK'];
                    $captk = $row['capTK'];
                };

                if($captk == "User"){
                    $a = "../php/trangchuuser.php";
                }else{
                    $a = "../php/trangchuadmin.php";
                }

                $sql2 = "SELECT * FROM thanhvien where maTK = '$uid'";
                $result2 = $conn->query($sql2);
                while($row = $result2->fetch_assoc()){
                    $tentv = $row['tenTV'];
                    $nsinh = $row['nsinh'];
                    $gtinh = $row['gtinh'];
                    $email = $row['email'];
                } 
            }       
    ?>
    <div class="bg-all">
        <div>
            <ul>
                <li class="title-dyi-no">
                    <a href="<?php echo $a; ?>">DRAW YOUR IDEAS</a>
                </li>
                <li class="menu-list">
                    <a href="<?php echo $a; ?>">Homepage</a> 
                </li>
                <li class="menu-list">
                    <a href="../php/aboutdyi.php">About DYI</a> 
                </li>
                <li class="dropdown menu-list">
                    <a href="#">You</a>
                    <div class="dropdown-content">
                        <a href="../php/in4user.php">Thông tin cá nhân</a>
                        <a href="../php/dangxuat.php">Đăng xuất</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class = "info-css">
            <form id = 'formin4' action="updatein4.php" method = "POST">
                <table class = "th"style = "margin: 20px auto 0px auto;" border='0' cellpadding="5" cellspacing="5">
                    <tr>
                        <td>UID:</td>
                        <td>
                            <?php
                                echo "<input type = 'text' id = 'uid' name = 'uid' value = '$uid' disabled>";
                                echo "<input type = 'hidden' id = 'uid' name = 'uid' value = '$uid'>";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Tên đăng nhập:</td>
                        <td>
                            <?php
                                echo "<input type = 'text' id = 'tendn' name = 'tendn' value = '$tendn' disabled>";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Mật khẩu:</td>
                        <td>
                            <?php
                                echo "<input type = 'password' id = 'mk' name = 'mk' value = '$mk' disabled>";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Họ và tên:</td>
                        <td>
                            <?php
                                echo "<input type = 'text' id = 'tentv' name = 'tentv' value = '$tentv'>";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Ngày sinh(yyyy-mm-dd):</td>
                        <td>
                            <?php
                                echo "<input type = 'text' id = 'nsinh' name = 'nsinh' value = '$nsinh' disabled>";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Giới tính:</td>
                        <td>
                            <?php
                                echo "<input type = 'text' id = 'gtinh' name = 'gtinh' value = '$gtinh' disabled>";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>
                            <?php
                                echo "<input type = 'email' id = 'email' name = 'email' value = '$email'>";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Cấp tài khoản:</td>
                        <td>
                            <?php
                                echo "<input type = 'text' id = 'captk' name = 'captk' value = '$captk' disabled>";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan = '2' style="text-align: center;">
                            <input type="submit" id = 'xacnhanin4' name = 'xacnhanin4' value ="Xác nhận chỉnh sửa">
                        </td>
                    </tr>
                </table>
            </form>
            <div id="test" style="text-align: center"></div>
        </div>
        <div class="foot">
            <div>
                <p>DYI - DRAW YOUR IDEAS - VẼ THEO Ý TƯỞNG CỦA BẠN</p>
                <div>
                    <a href="https://www.facebook.com/dyi565941" class="fa fa-facebook" target="_blank"></a>
                    <a href="mailto:dyi565941@gmail.com" class="fa fa-envelope" target="_blank"></a>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="../script/my_script.js"></script>
</body>
</html>