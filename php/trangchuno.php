<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="../css/homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="bg-all">
        <div>
            <ul>
                <li class="title-dyi-no">
                    <a href="../php/trangchuno.php">DRAW YOUR IDEAS</a>
                </li>
                <li class="menu-list">
                    <a href="../php/trangchuno.php">Homepage</a> 
                </li>
                <li class="dropdown menu-list">
                    <a href="#">You</a>
                    <div class="dropdown-content">
                        <a href="../php/dangnhap.php">Đăng nhập</a>
                        <a href="../php/dangky.php">Đăng ký</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="query-random">
            <form id = "formlc" action="xulyrandom.php" method="POST">
                <fieldset>
                    <legend class="title-random">Chọn một hoặc nhiều</legend>
                    <div >
                        <fieldset>
                            <legend>
                                <input type="checkbox" name="luachon[]" value="thucvat">
                                Thực vật
                            </legend>
                            <div class="radio-css">
                                <input type="radio" name="tv" value="hoa">Loài hoa
                                <input type="radio" name="tv" value="traicay">Trái cây
                                <input type="radio" name="tv" value="cu">Loại củ
                                <input type="radio" name="tv" value="khactv">Ngẫu nhiên thực vật
                                <input type="radio" name="tv" value="khong" checked>Không chọn                                                  
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>
                                <input type="checkbox" name="luachon[]" value="dongvat">
                                Động vật
                            </legend>
                            <div class="radio-css">
                                <input type="radio" name="dv" value="chim">Lớp chim
                                <input type="radio" name="dv" value="ca">Lớp cá
                                <input type="radio" name="dv" value="giapxac">Lớp giáp xác
                                <input type="radio" name="dv" value="hinhnhen">Lớp hình nhện
                                <input type="radio" name="dv" value="saubo">Lớp sâu bọ
                                <input type="radio" name="dv" value="bosat">Lớp bò sát
                                <input type="radio" name="dv" value="thu">Lớp thú
                                <input type="radio" name="dv" value="khacdv">Ngẫu nhiên động vật
                                <input type="radio" name="dv" value="khong" checked>Không chọn
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>
                                <input type="checkbox" name="luachon[]" value="noithat">
                                Nội thất
                            </legend>
                            <div class="radio-css">
                                <input type="radio" name="nt" value="ban">Bàn
                                <input type="radio" name="nt" value="ghe">Ghế
                                <input type="radio" name="nt" value="tu">Tủ
                                <input type="radio" name="nt" value="den">Đèn
                                <input type="radio" name="nt" value="khacnt">Ngẫu nhiên nội thất
                                <input type="radio" name="nt" value="khong" checked>Không chọn
                            </div>
                        </fieldset>
                        <div>
                            <input type="checkbox" name="luachon[]" value ="monan">
                            <label for="monan">Món ăn</label>

                            <input type="checkbox" name="luachon[]" value = "boicanh">
                            <label for="boicanh">Bối cảnh</label>
                            
                            <input type="checkbox" name="luachon[]" value = "gioitinh">
                            <label for="gioitinh">Giới tính</label>
                            
                            <input type="checkbox" name="luachon[]" value ="kieutoc">
                            <label for="kieutoc">Kiểu tóc</label>
                            
                            <input type="checkbox" name="luachon[]" value ="mua">
                            <label for="mua">Mùa</label>
                            
                            <input type="checkbox" name="luachon[]" value ="nghenghiep">
                            <label for="nghenghiep">Nghề nghiệp</label>
                            
                            <input type="checkbox" name="luachon[]" value ="vatdung">
                            <label for="vatdung">Vật dụng</label>
                            
                            <input type="checkbox" name="luachon[]" value ="trangphuc">
                            <label for="trangphuc">Trang phục</label>
                        </div>
                    </div>
                    <div class="number-css">
                        <p>Số lượng kết quả bạn muốn trả về (Mặc định là 1, tối đa là 5 dòng cho mỗi lựa chọn)</p>
                        <input type="number" value = "1" name ="soluong" min = "1" max = "5">
                    </div>
                    <div class="number-css">
                        <input type="submit" class="nop" id = "xacnhan" name="xacnhan" value="Xác nhận">
                        <input type="reset" class="nop" name="nhaplai" value="Nhập lại">
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="result-total">
            <div class="color-random">
                <div id="colorpad" style="width:200px;height:200px;background-color:#000">
                    <div>
                        <span id="k"></span>
                    </div>
                </div>
                <div>
                    <button onclick="setRandomColor()">Click để để lấy màu ngẫu nhiên</button>
                </div>
            </div>
            <div class="result-random">
                <div id = "lc"></div>
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
</body>
</html>