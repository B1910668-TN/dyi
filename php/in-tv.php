<?php
    function ins_table_plant($n){
?>
    <form id = "form-plant"  method="POST" enctype="multipart/form-data">
        <table border="1" style="margin: 0px auto 50px auto;">
            <tr>
                <th>Tên thực vật</th>
                <th>Ý nghĩa thực vật</th>
                <th>Câu chuyện</th>
                <th>Hình ảnh</th>
                <th>Link</th>
                <th>Loại thực vật</th>                
            </tr>
            <?php
                $n = $_POST['n'];
                for($i = 1; $i <= $n; $i++){
            ?>
                <tr>
                    <td>
                        <input autocomplete="off" type="text" id="<?php echo $i . 'tentv';?>" name="<?php echo $i . 'tentv';?>" size="20" >
                    </td>
                    <td>
                        <input autocomplete="off" type="text" id="<?php echo $i . 'ynghia_tv';?>" name="<?php echo $i . 'ynghia_tv';?>" size="20" value = "Không"> 
                    </td>
                    <td>
                        <input autocomplete="off" type="text" id="<?php echo $i . 'cauchuyen_tv';?>" name="<?php echo $i . 'cauchuyen_tv';?>" size="20" value = "Không">
                    </td>
                    <td>
                        <input type="file" id = "<?php echo $i . 'image';?>" name ="<?php echo $i . 'image';?>">
                    </td>
                    <td>
                        <input autocomplete="off" type="text" id="<?php echo $i . 'link_tv';?>" name="<?php echo $i . 'link_tv';?>" size="20" value = "Không">                       
                    </td>
                    <td>
                        <select name="<?php echo $i . 'loaitv';?>" id="<?php echo $i . 'loaitv';?>">
                            <option value="hoa">Hoa</option>
                            <option value="traicay">Trái cây</option>
                            <option value="cu">Củ</option>
                        </select> 
                    </td>
                </tr>
                <input type="hidden" name="n" value="<?php echo $n;?>">
            <?php
                }
            ?>
        </table>
            <input type="submit" id = "ins-tv" name="ins-tv" value="Gửi">
    </form>
<?php
    }
?>


<?php
    function ins_table_animal($n){
?>
    <form id = "form-plant" action="in-tv-2.php" method="POST" enctype="multipart/form-data">
        <table border="1" style="margin: 0px auto 50px auto;">
            <tr>
                <th>Tên động vật</th>
                <th>Ý nghĩa động vật</th>
                <th>Câu chuyện</th>
                <th>Hình ảnh</th>
                <th>Link</th>
                <th>Lớp động vật</th>                
            </tr>
            <?php
                $n = $_POST['n'];
                for($i = 1; $i <= $n; $i++){
            ?>
                <tr>
                    <td>
                        <input autocomplete="off" type="text" id="<?php echo $i . 'tentv';?>" name="<?php echo $i . 'tentv';?>" size="20">
                    </td>
                    <td>
                        <input autocomplete="off" type="text" id="<?php echo $i . 'ynghia_tv';?>" name="<?php echo $i . 'ynghia_tv';?>" size="20" value = "Không">
                    </td>
                    <td>
                        <input autocomplete="off" type="text" id="<?php echo $i . 'cauchuyen_tv';?>" name="<?php echo $i . 'cauchuyen_tv';?>" size="20" value = "Không">
                    </td>
                    <td>
                        <input type="file" name ="<?php echo $i . 'image';?>">
                    </td>
                    <td>
                        <input autocomplete="off" type="text" id="<?php echo $i . 'link_tv';?>" name="<?php echo $i . 'link_tv';?>" size="20" value = "Không">                       
                    </td>
                    <td>
                        <select name="<?php echo $i . 'loaitv';?>" id="<?php echo $i . 'loaitv';?>">
                            <option value="chim">Lớp chim</option>
                            <option value="ca">Lớp cá</option>
                            <option value="giapxac">Lớp giáp xác</option>
                            <option value="hinhnhen">Lớp hình nhện</option>
                            <option value="saubo">Lớp sâu bọ</option>
                            <option value="bosat">Lớp bò sát</option>
                            <option value="thu">Lớp thú</option>
                            <option value="khacdv">Khác</option>
                        </select> 
                    </td>
                </tr>
                <input type="hidden" name="n" value="<?php echo $n;?>">
            <?php
                }
            ?>
        </table>
            <input type="submit" id = "ins-tv" name="ins-tv" value="Gửi">
    </form>
<?php
    }
?>

<?php
    function ins_table_interior($n){
?>
    <form id = "form-plant" action="in-tv-2.php" method="POST" enctype="multipart/form-data">
        <table border="1" style="margin: 0px auto 50px auto;">
            <tr>
                <th>Tên nội thất</th>
                <th>Loại nội thất</th>                
            </tr>
            <?php
                $n = $_POST['n'];
                for($i = 1; $i <= $n; $i++){
            ?>
                <tr>
                    <td>
                        <input autocomplete="off" type="text" id="<?php echo $i . 'tentv';?>" name="<?php echo $i . 'tentv';?>" size="20">
                    </td>
                    <td>
                        <select name="<?php echo $i . 'loaitv';?>" id="<?php echo $i . 'loaitv';?>">
                            <option value="ban">Bàn</option>
                            <option value="ghe">Ghế</option>
                            <option value="tu">Tủ</option>
                            <option value="den">Đèn</option>
                            <option value="khacnt">Khác</option>
                        </select> 
                    </td>
                </tr>
                <input type="hidden" name="n" value="<?php echo $n;?>">
            <?php
                }
            ?>
        </table>
            <input type="submit" id = "ins-tv" name="ins-tv" value="Gửi">
    </form>
<?php
    }
?>

<?php
    function ins_table_background($n){
?>
    <form id = "form-plant" action="in-tv-2.php" method="POST" enctype="multipart/form-data">
        <table border="1" style="margin: 0px auto 50px auto;">
            <tr>
                <th>Tên bối cảnh</th>                
            </tr>
            <?php
                $n = $_POST['n'];
                for($i = 1; $i <= $n; $i++){
            ?>
                <tr>
                    <td>
                        <input autocomplete="off" type="text" id="<?php echo $i . 'tentv';?>" name="<?php echo $i . 'tentv';?>" size="20">
                    </td>
                </tr>
                <input type="hidden" name="n" value="<?php echo $n;?>">
            <?php
                }
            ?>
        </table>
            <input type="submit" id = "ins-tv" name="ins-tv" value="Gửi">
    </form>
<?php
    }
?>

<?php
    function ins_table_hair($n){
?>
    <form id = "form-plant" action="in-tv-2.php" method="POST" enctype="multipart/form-data">
        <table border="1" style="margin: 0px auto 50px auto;">
            <tr>
                <th>Tên kiểu tóc</th>                
                <th>Hình ảnh</th>                
                <th>Link</th>                
            </tr>
            <?php
                $n = $_POST['n'];
                for($i = 1; $i <= $n; $i++){
            ?>
                <tr>
                    <td>
                        <input autocomplete="off" type="text" id="<?php echo $i . 'tentv';?>" name="<?php echo $i . 'tentv';?>" size="20">
                    </td>
                    <td>
                        <input type="file" name ="<?php echo $i . 'image';?>">
                    </td>
                    <td>
                        <input autocomplete="off" type="text" id="<?php echo $i . 'link_tv';?>" name="<?php echo $i . 'link_tv';?>" size="20" value = "Không">                       
                    </td>
                </tr>
                <input type="hidden" name="n" value="<?php echo $n;?>">
            <?php
                }
            ?>
        </table>
            <input type="submit" id = "ins-tv" name="ins-tv" value="Gửi">
    </form>
<?php
    }
?>


<?php
    function ins_table_profession($n){
?>
    <form id = "form-plant" action="in-tv-2.php" method="POST" enctype="multipart/form-data">
        <table border="1" style="margin: 0px auto 50px auto;">
            <tr>
                <th>Tên nghề nghiệp</th>                
            </tr>
            <?php
                $n = $_POST['n'];
                for($i = 1; $i <= $n; $i++){
            ?>
                <tr>
                    <td>
                        <input autocomplete="off" type="text" id="<?php echo $i . 'tentv';?>" name="<?php echo $i . 'tentv';?>" size="20">
                    </td>
                </tr>
                <input type="hidden" name="n" value="<?php echo $n;?>">
            <?php
                }
            ?>
        </table>
            <input type="submit" id = "ins-tv" name="ins-tv" value="Gửi">
    </form>
<?php
    }
?>

<?php
    function ins_table_implement($n){
?>
    <form id = "form-plant" action="in-tv-2.php" method="POST" enctype="multipart/form-data">
        <table border="1" style="margin: 0px auto 50px auto;">
            <tr>
                <th>Tên vật dụng</th>                
            </tr>
            <?php
                $n = $_POST['n'];
                for($i = 1; $i <= $n; $i++){
            ?>
                <tr>
                    <td>
                        <input autocomplete="off" type="text" id="<?php echo $i . 'tentv';?>" name="<?php echo $i . 'tentv';?>" size="20">
                    </td>
                </tr>
                <input type="hidden" name="n" value="<?php echo $n;?>">
            <?php
                }
            ?>
        </table>
            <input type="submit" id = "ins-tv" name="ins-tv" value="Gửi">
    </form>
<?php
    }
?>

<?php
    function ins_table_costume($n){
?>
    <form id = "form-plant" action="in-tv-2.php" method="POST" enctype="multipart/form-data">
        <table border="1" style="margin: 0px auto 50px auto;">
            <tr>
                <th>Tên trang phục</th>                
                <th>Hình ảnh</th>                
                <th>Quốc gia</th>                
                <th>Link</th>                
            </tr>
            <?php
                $n = $_POST['n'];
                for($i = 1; $i <= $n; $i++){
            ?>
                <tr>
                    <td>
                        <input autocomplete="off" type="text" id="<?php echo $i . 'tentv';?>" name="<?php echo $i . 'tentv';?>" size="20">
                    </td>
                    <td>
                        <input type="file" name ="<?php echo $i . 'image';?>">
                    </td>
                    <td>
                        <input autocomplete="off" type="text" id="<?php echo $i . 'tenqg';?>" name="<?php echo $i . 'tenqg';?>" size="20" value = "Không">
                    </td>
                    <td>
                        <input autocomplete="off" type="text" id="<?php echo $i . 'link_tv';?>" name="<?php echo $i . 'link_tv';?>" size="20" value = "Không">                       
                    </td>
                </tr>
                <input type="hidden" name="n" value="<?php echo $n;?>">
            <?php
                }
            ?>
        </table>
            <input type="submit" id = "ins-tv" name="ins-tv" value="Gửi">
    </form>
<?php
    }
?>

<?php
    function ins_table_dish($n){
?>
    <form id = "form-plant" action="in-tv-2.php" method="POST" enctype="multipart/form-data">
        <table border="1" style="margin: 0px auto 50px auto;">
            <tr>
                <th>Tên món ăn</th>                
            </tr>
            <?php
                $n = $_POST['n'];
                for($i = 1; $i <= $n; $i++){
            ?>
                <tr>
                    <td>
                        <input autocomplete="off" type="text" id="<?php echo $i . 'tentv';?>" name="<?php echo $i . 'tentv';?>" size="20">
                    </td>
                </tr>
                <input type="hidden" name="n" value="<?php echo $n;?>">
            <?php
                }
            ?>
        </table>
            <input type="submit" id = "ins-tv" name="ins-tv" value="Gửi">
    </form>
<?php
    }
?>

<?php    
    //File xử lý hiện số lượng bảng thêm
    session_start();

    require 'connect-select-db.php';
    
    if(!isset($_SESSION['tendn'])){
        echo "Vui lòng đăng nhập!";
        die();
    }

    $tendn = $_SESSION['tendn'];

    if(isset($_POST['lc'])){
        $lc = $_POST['lc'];
        $n = $_POST['n'];
        $_SESSION['lc'] = $lc;
    
        if($n < 0 || $n > 10){
            echo "Vui lòng chọn trong khoảng từ 1 -> 10";
        }else{
            if($lc != 'khong'){
                switch($lc){
                    case 'thucvat':
                        ins_table_plant($n);
                        break;
                    case 'dongvat':
                        ins_table_animal($n);
                        break;
                    case 'noithat':
                        ins_table_interior($n);
                        break;
                    case 'boicanh':
                        ins_table_background($n);
                        break;
                    case 'kieutoc':
                        ins_table_hair($n);
                        break;
                    case 'nghenghiep':
                        ins_table_profession($n);
                        break;
                    case 'vatdung':
                        ins_table_implement($n);
                        break;
                    case 'trangphuc':
                        ins_table_costume($n);
                        break;
                    case 'monan':
                        ins_table_dish($n);
                        break;
                }
            }else{
                echo "Vui lòng chọn mục cần thêm!";
            }
        }
    }
?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery-1.8.2.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {

    $("#ins-tv").click(function (event) {

        //stop submit the form, we will post it manually.
        event.preventDefault();

        // Get form
        var form = $('#form-plant')[0];

        // Create an FormData object 
        var data = new FormData(form);

        // If you want to add an extra field for the FormData
        data.append("CustomField", "This is some extra data, testing");

        // disabled the submit button
        $("#ins-tv").prop("disabled", true);

        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "in-tv-2.php",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 3000,
            success: function (data) {

                $("#test-tv").hide();
                $("#test-tv").html("");
                $("#test-tv").prepend(data).fadeIn(1000);
                console.log("SUCCESS : ", data);
                $("#ins-tv").prop("disabled", false);

                setTimeout(function(){
                    $("#test-tv").fadeOut('fast');
                }, 5000);

            }, 
            error: function (e) {

                $("#test-tv").text(e.responseText);
                console.log("ERROR : ", e);
                $("#ins-tv").prop("disabled", false);

            }
        });

    });

});
</script>
