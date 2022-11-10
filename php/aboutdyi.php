<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm</title>
    <link rel="stylesheet" href="../css/s_in_data.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/about.css">
    <style>
        body{
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        -o-user-select: none;
        user-select: none;
        }
    </style>
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
                            <?php
                                

                                require 'connect-select-db.php';
                                $tendn = $_SESSION['tendn'];

                                $sql = "SELECT * FROM taikhoan where tenTK = '$tendn'";
                                $result = $conn->query($sql);

                                if($result->num_rows > 0){
                                    while($row = $result->fetch_assoc()){
                                        if($row['capTK'] == "Admin"){
                                            ?>
                                                <a href="../php/s_in_data.php">Thêm xoá dữ liệu</a>
                                                <a href="../php/del-user.php">Xoá người dùng</a>
                                            <?php
                                        }else{
                                            ?>
                                                <a href="../php/s_in_data.php">Thêm dữ liệu</a>
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
            <div class ="role">
                <h1 style="text-align:center;">Vài điều về Draw Your Ideas</h1>
                        <div>
                            <h2>Vấn đề về trách nhiệm</h2>
                                <div>
                                    <h3>Đối với Draw Your Ideas</h3>
                                    <div class ="connect">
                                        <p>
                                            - Trang web sẽ không chịu trách nhiệm bản quyền về những hình ảnh do người cung cấp.
                                        </p>
                                        <p>
                                            - Trang web sẽ không cung cấp thông tin cá nhân của người dùng cho bên thứ ba, ngoại trừ những trường
                                            hợp người dùng có những hành vi: vi phạm tiêu chuẩn cộng đồng, nội dung mang tính chất phản động,
                                            chống đối nhà nước, vi phạm pháp luật, vi phạm về mặt đạo đức, vi phạm bản quyền.
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <h3>Đối với người dùng</h3>
                                    <div class ="connect">
                                        <p>
                                            - Người dùng phải tuân thủ quyền sáng tác, bản quyền hình ảnh.
                                        </p>
                                        <p>
                                            - Người dùng không được thêm những thông tin đồi truỵ, hình ảnh vi phạm tiêu chuẩn cộng đồng vào cơ sở dữ liệu
                                            của trang web. Nếu vi phạm, tài khoản của người dùng sẽ được xử lý theo luật của web này.
                                        </p>
                                    </div>
                                </div>
                        </div>
                
                        <div>
                            <h2>Vấn đề về xử lý người dùng vi phạm</h2>
                                <div>
                                    <h3>Cách thức nhận báo cáo vi phạm</h3>
                                    <div class ="connect">
                                        <p>
                                            - Nếu người dùng phát hiện tài khoản người dùng khác có hành vi vi phạm tiêu chuẩn cộng đồng, xin hãy
                                            báo cáo về địa chỉ email của Draw Your Ideas: <a href="mailto:dyi565941@gmail.com">dyi565941@gmail.com</a>  
                                        </p>
                                        <div class ="connect">
                                            <p>- Về phần tiêu đề: Vui lòng viết theo cú pháp: [BÁO CÁO]Tên đăng nhập người vi phạm - mã tài khoản của người báo cáo</p>
                                            <p>Ví dụ người dùng A có mã tài khoản TK00001 báo cáo người dùng B, phần tiêu để email sẽ như sau:</p>
                                            <p>[BÁO CÁO]B - TK00001</p>

                                            <p>- Về phần nội dung: Người báo cáo thể viết bất cứ nội dung gì, nhưng yêu cầu cần có là phải có hình ảnh đính kèm bằng
                                                chứng vi phạm của người bị báo cáo.
                                            </p>
                                            <p>- Người dùng có thể báo cáo thông qua Fanpage của web (nhưng không khuyến khích): <a href="https://www.facebook.com/dyi565941">https://www.facebook.com/dyi565941</a></p>
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <div>
                            <h2>Vấn đề về đóng góp ý kiến cải thiện trang web</h2>
                                <div>
                                    <h3>Cách thức nhận ý kiến đóng góp</h3>
                                    <div class ="connect">
                                        <p>
                                            - Nếu người dùng có ý tưởng, mong muốn web có thêm những chức năng khác hoặc phát hiện lỗi xin vui lòng
                                            gửi ý kiến đóng góp về địa chỉ email của Draw Your Ideas: <a href="mailto:dyi565941@gmail.com">dyi565941@gmail.com</a>  
                                        </p>
                                        <div>
                                            <p>- Về phần tiêu đề: Vui lòng viết theo cú pháp: [ĐÓNG GÓP]Tên ý tưởng đóng góp/lỗi - mã tài khoản cá nhân</p>
                                            <p>Ví dụ người dùng A có mã tài khoản TK00001 muốn đóng góp vấn đề ABC, phần tiêu để email sẽ như sau:</p>
                                            <p>[ĐÓNG GÓP]ABC - TK00001</p>

                                            <p>- Về phần nội dung: Người báo cáo thể viết bất cứ nội dung gì.</p>

                                            <p>- Người dùng có thể đóng góp thông qua Fanpage của web (nhưng không khuyến khích): <a href="https://www.facebook.com/dyi565941">https://www.facebook.com/dyi565941</a></p>

                                        </div>
                                    </div>
                                </div>
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
</body>
</html>