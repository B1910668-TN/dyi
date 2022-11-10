<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xoá người dùng</title>
    <link rel="stylesheet" href="../css/s_in_data.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <?php
        session_start();

        
        require 'connect-select-db.php';
        $tendn = $_SESSION['tendn'];

        $sql = "SELECT * FROM taikhoan where tenTK = '$tendn'";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                if($row['capTK'] == "Admin"){
                        $a = "../php/trangchuadmin.php";
                }else{
                    $a = "../php/trangchuuser.php";
                }
            }
        }
    ?>
<div class="bg-all">
        <div>
            <ul>
                <li class="title-dyi-admin">
                    <a href="<?php echo $a; ?>">DRAW YOUR IDEAS</a>
                </li>
                <li class="menu-list">
                    <a href="<?php echo $a; ?>">Homepage</a> 
                </li>
                <li class="menu-list">
                    <a href="../php/aboutdyi.php">About DYI</a> 
                </li>
                <li class="dropdown menu-list">
                    <a href="#">Edit</a>
                    <div class="dropdown-content">
                        <a href="../php/s_in_data.php">Thêm dữ liệu</a>
                        <?php
                            

                            require 'connect-select-db.php';
                            $tendn = $_SESSION['tendn'];

                            $sql = "SELECT * FROM taikhoan where tenTK = '$tendn'";
                            $result = $conn->query($sql);

                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    if($row['capTK'] == "Admin"){
                                        ?>
                                            <a href="">Xoá người dùng</a>
                                        <?php
                                    }
                                }
                            }
                        ?>
                    </div>
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
        <div class="search-result">
            <div>
                <h1 style="text-align:center;">Tìm người dùng</h1>
            </div>
            <div>
                <input type="text" id = "tim" name = "tim" autocomplete="off" required placeholder="Nhập nội dung cần tìm...">
            </div>
            <div id ="kq"></div>
        </div>
        <br>
        <hr>
        <div>
            <div  style = "margin: 0px auto 0px auto; width: 500px; text-align: center;">
                <h1>Xoá người dùng</h1>
            </div>
            <div style="text-align: center; padding-bottom: 15px">
                <form action="del-table-user.php" id="form_test_del_user" method="POST">
                    <div>
                        <input type="number" id="n" name ="n" min="1" max="10" value="1">
                        <input type="submit" id = "conf-tv" name="s" value="Xác nhận">
                    </div>
                </form>
            </div>
            <div id="kq_table_del"></div>
            <div id = "test-tv"></div>
        </div>
        <br>
        <hr>
        <div>
            <div  style = "margin: 0px auto 0px auto; width: 500px; text-align: center;">
                <h1>Cập nhật cấp người dùng</h1>
            </div>
            <div style="text-align: center; padding-bottom: 15px">
                <form action="update_table_type_us.php" id="form_test_upd_type_user" method="POST">
                    <div>
                        <input type="number" id="m" name ="m" min="1" max="10" value="1">
                        <input type="submit" id = "conf_user" name="conf_user" value="Xác nhận">
                    </div>
                </form>
            </div>
            <div id="kq_table_user"></div>
            <div id = "test-user"></div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Hiện bảng xoá tài khoản ngay trang hiện tại -->
        <script>
            $("#conf-tv").click(function(){
                $.post($("#form_test_del_user").attr("action"),
                        $("#form_test_del_user").serializeArray(),        
                        function(thongtin){ 
                            $("#kq_table_del").empty();
                            $("#kq_table_del").html(thongtin);
                        });
                $("#form_test_del_user").submit(function(){
                    return false;
                });
            }); 
        </script>

    <!-- Hiện bảng cập nhật cấp tài khoản ngay trang hiện tại -->
        <script>
            $("#conf_user").click(function(){
                $.post($("#form_test_upd_type_user").attr("action"),
                        $("#form_test_upd_type_user").serializeArray(),        
                        function(thongtin){ 
                            $("#kq_table_user").empty();
                            $("#kq_table_user").html(thongtin);
                        });
                $("#form_test_upd_type_user").submit(function(){
                    return false;
                });
            }); 
        </script>
  
    <!-- Hiện bảng tìm tài khoảns ngay trang hiện tại -->

        <script>
            $(document).ready(function(){
                $("#tim").keyup(function(){
                    var tim = $('#tim').val();

                    if(tim != ""){
                        $.ajax({
                            url: "s_in4_user.php",
                            method: "POST",
                            data: {tim : tim},

                            success:function(data){
                                $("#kq").html(data);
                            }
                        });
                    }else{
                        $("#kq").html("Vui lòng nhập từ khoá!");
                    }
                });
            });
        </script>

</body>
</html>