<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="../css/dn.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
    <div class="nencangiua">
        <div class="nenden"></div>
        <div>
                <table border="0" class="formdk" width="200px" height="400px" cellpadding="5" cellspacing="5">
                    <tr>
                        <td colspan="2" class="chinh">
                            Đăng nhập
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input autocomplete="off" type="text" id="tendn" name="tendn" size="20" class="noline" required placeholder="Tên đăng nhập">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="password" id = "mk" name="mk" size="20" class="noline" required placeholder="Mật khẩu">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div id="fg"></div>
                            <div id="fc"></div>
                        </td>
                    </tr>
                    <tr>
                        <td class="nut" style="text-align: left;">
                            <input type="reset" name="nhaplai" value="Nhập lại" class="nop dichuot">
                        </td>
                        <td class="nut" style="text-align: right;">
                            <input type="button" id="dangnhap" name="dangnhap" value="Đăng nhập" class="nop dichuot">
                        </td>
                    </tr>
                    <tr>
                        <td class="nut" colspan="2" style="text-align: center;">
                            <a href="../php/trangchuno.php" class="link">Không muốn đăng nhập nữa :<</a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a href="../php/dangky.php">Chưa có tài khoản?</a>
                        </td>
                    </tr>
                </table>
        </div>
    </div>
    <script type="text/javascript">
        $("#dangnhap").on("click", function(){
            var tendn = $("#tendn").val();
            var mk = $("#mk").val();
            var fg = $("#fg");
            var fc = $("#fc");

            fc.html("");
            fg.html("");


            if (tendn == "" || mk == "") {
                fc.html("Vui lòng điền đủ thông tin!");
                return false;
            }
            
            $.ajax({
            url: "xulydn.php",
            method: "POST",
            data: { tendn : tendn, mk : mk },
            success : function(response){
                if(response == 0){
                    fc.html("Tên đăng nhập hoặc mật khẩu không đúng!");
                }else if(response == 1){
                    window.location = "trangchuuser.php";
                }else{
                    window.location = "trangchuadmin.php";
                }
            }
            });

        });
    </script>
</body>
</html>