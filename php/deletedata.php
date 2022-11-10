<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xoá dữ liệu</title>
    <link rel="stylesheet" href="../css/s_in_data.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="bg-all">
        <div>
            <ul>
                <li class="title-dyi-admin">
                    <a href="../php/trangchuadmin.php">DRAW YOUR IDEAS</a>
                </li>
                <li class="menu-list">
                    <a href="../php/trangchuadmin.php">Homepage</a> 
                </li>
                <li class="menu-list">
                    <a href="../php/aboutdyi.php">About DYI</a> 
                </li>
                <li class="dropdown menu-list">
                    <a href="#">Edit</a>
                    <div class="dropdown-content">
                        <a href="../php/s_in_data.php">Thêm xoá dữ liệu</a>
                        <a href="../php/del-user.php">Xoá người dùng</a>
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
        <div  style = "margin: 0px auto 0px auto; width: 500px; text-align: center;">
            <h1>Xoá dữ liệu</h1>
        </div>
        <div class="insert-tv">
            <div>
                <div class = "chosen">
                    <form id = "form-test-tv" action="del-table.php" method = "POST">
                        <input type="radio" class = "lc" name="lc" id = "thucvat" value="thucvat">Thực vật
                        <input type="radio" class = "lc" name="lc" id = "dongvat" value="dongvat">Động vật
                        <input type="radio" class = "lc" name="lc" id = "noithat" value="noithat">Nội thất
                        <input type="radio" class = "lc" name="lc" id = "boicanh" value="boicanh">Bối cảnh
                        <input type="radio" class = "lc" name="lc" id = "kieutoc" value="kieutoc">Kiểu tóc
                        <input type="radio" class = "lc" name="lc" id = "nghenghiep" value="nghenghiep">Nghề nghiệp
                        <input type="radio" class = "lc" name="lc" id = "vatdung" value="vatdung">Vật dụng
                        <input type="radio" class = "lc" name="lc" id = "trangphuc" value="trangphuc">Trang phục   
                        <input type="radio" class = "lc" name="lc" id = "monan" value="monan">Món ăn   
                        <input type="radio" class = "lc" name="lc" id = "khong"value="khong" checked>Không chọn 
                        <br> 
                        <div>
                            <input type="number" id="n" name ="n" min="1" max="10" value="1">
                            <input type="submit" id = "conf-tv" name="s" value="Xác nhận">
                        </div>
                    </form>
                </div>
                <div id="kq_table_del"></div>
                <div id = "test-tv"></div>
            </div>
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
    <script>
        $("#conf-tv").click(function(){
            $.post($("#form-test-tv").attr("action"),
                    $("#form-test-tv").serializeArray(),        
                    function(thongtin){ 
                        $("#kq_table_del").empty();
                        $("#kq_table_del").html(thongtin);
                    });
            $("#form-test-tv").submit(function(){
                return false;
            });
        }); 
    </script>
</body>
</html>