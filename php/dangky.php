<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký thành viên</title>
    <link rel="stylesheet" href="../css/dk.css">
</head>
<body>
    <div class="nencangiua">
        <div class="nenden"></div>
        <div>
            <form id="myform" action="xulydk.php" method="POST">
                <table border="0" class="formdk" width="200px" height="400px" cellpadding="5" cellspacing="5">
                    <tr>
                        <td colspan="2" class="chinh">
                            Đăng ký
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input autocomplete="off" type="text" name="tendn" size="20" class="noline" required placeholder="Tên đăng nhập">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="password" name="mk" size="20" class="noline" required placeholder="Mật khẩu">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="password" name="rmk" size="20" class="noline" required placeholder="Lặp lại mật khẩu">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input autocomplete="off" type="text" name="hoten" size="20" class="noline" required placeholder="Họ và tên">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Ngày sinh
                        </td>
                        <td>
                            <input type="date" name="ngaysinh" min="1970-01-01" max="2030-01-01" required class="fdate">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Giới tính<span>&nbsp;&nbsp;</span>
                        </td>
                        <td>
                            <input type="radio" name="sex" value="Nam" checked>Nam
                            <input type="radio" name="sex" value="Nữ">Nữ
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input autocomplete="off" type="email" name="email" size="20" class="noline" required placeholder="Email">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div id="ack"></div>
                        </td>
                    </tr>
                    <tr>
                        <td class="nut" style="text-align: left;">
                            <input type="reset" name="nhaplai" value="Nhập lại" class="nop dichuot">
                        </td>
                        <td class="nut" style="text-align: right;">
                            <input type="submit" id="dangky" name="dangky" value="Đăng ký" class="nop dichuot">
                        </td>
                    </tr>
                    <tr>
                        <td class="nut" colspan="2" style="text-align: center;">
                            <a href="../php/trangchuno.php" class="link">Không muốn đăng nhập nữa :<</a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a href="../php/dangnhap.php">Đã có tài khoản?</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="../script/my_script.js"></script>
</body>
</html>