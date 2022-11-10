<?php
    function del_table_plant($n){
?>
        <form action="del-data.php" id = "form-del" method ="POST">
            <table border = "1" style="margin: 0px auto 50px auto;">
                <tr>
                    <th>Mã thực vật</th>
                </tr>
                    <?php
                        for($i = 1; $i <= $n; $i++){
                    ?>
                        <tr>
                            <td>
                                <input autocomplete="off" type="text" id="<?php echo $i . 'id_tv';?>" name="<?php echo $i . 'id_tv';?>" size="20">
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
    function del_table_animal($n){
?>
        <form action="del-data.php" id = "form-del" method ="POST">
            <table border = "1" style="margin: 0px auto 50px auto;">
                <tr>
                    <th>Mã động vật</th>
                </tr>
                    <?php
                        for($i = 1; $i <= $n; $i++){
                    ?>
                        <tr>
                            <td>
                                <input autocomplete="off" type="text" id="<?php echo $i . 'id_tv';?>" name="<?php echo $i . 'id_tv';?>" size="20">
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
    function del_table_interior($n){
?>
        <form action="del-data.php" id = "form-del" method ="POST">
            <table border = "1" style="margin: 0px auto 50px auto;">
                <tr>
                    <th>Mã nội thất</th>
                </tr>
                    <?php
                        for($i = 1; $i <= $n; $i++){
                    ?>
                        <tr>
                            <td>
                                <input autocomplete="off" type="text" id="<?php echo $i . 'id_tv';?>" name="<?php echo $i . 'id_tv';?>" size="20">
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
    function del_table_background($n){
?>
        <form action="del-data.php" id = "form-del" method ="POST">
            <table border = "1" style="margin: 0px auto 50px auto;">
                <tr>
                    <th>Mã bối cảnh</th>
                </tr>
                    <?php
                        for($i = 1; $i <= $n; $i++){
                    ?>
                        <tr>
                            <td>
                                <input autocomplete="off" type="text" id="<?php echo $i . 'id_tv';?>" name="<?php echo $i . 'id_tv';?>" size="20">
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
    function del_table_hair($n){
?>
        <form action="del-data.php" id = "form-del" method ="POST">
            <table border = "1" style="margin: 0px auto 50px auto;">
                <tr>
                    <th>Mã kiểu tóc</th>
                </tr>
                    <?php
                        for($i = 1; $i <= $n; $i++){
                    ?>
                        <tr>
                            <td>
                                <input autocomplete="off" type="text" id="<?php echo $i . 'id_tv';?>" name="<?php echo $i . 'id_tv';?>" size="20">
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
    function del_table_profession($n){
?>
        <form action="del-data.php" id = "form-del" method ="POST">
            <table border = "1" style="margin: 0px auto 50px auto;">
                <tr>
                    <th>Mã nghề nghiệp</th>
                </tr>
                    <?php
                        for($i = 1; $i <= $n; $i++){
                    ?>
                        <tr>
                            <td>
                                <input autocomplete="off" type="text" id="<?php echo $i . 'id_tv';?>" name="<?php echo $i . 'id_tv';?>" size="20">
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
    function del_table_implement($n){
?>
        <form action="del-data.php" id = "form-del" method ="POST">
            <table border = "1" style="margin: 0px auto 50px auto;">
                <tr>
                    <th>Mã vật dụng</th>
                </tr>
                    <?php
                        for($i = 1; $i <= $n; $i++){
                    ?>
                        <tr>
                            <td>
                                <input autocomplete="off" type="text" id="<?php echo $i . 'id_tv';?>" name="<?php echo $i . 'id_tv';?>" size="20">
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
    function del_table_costume($n){
?>
        <form action="del-data.php" id = "form-del" method ="POST">
            <table border = "1" style="margin: 0px auto 50px auto;">
                <tr>
                    <th>Mã trang phục</th>
                </tr>
                    <?php
                        for($i = 1; $i <= $n; $i++){
                    ?>
                        <tr>
                            <td>
                                <input autocomplete="off" type="text" id="<?php echo $i . 'id_tv';?>" name="<?php echo $i . 'id_tv';?>" size="20">
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
    function del_table_dish($n){
?>
        <form action="del-data.php" id = "form-del" method ="POST">
            <table border = "1" style="margin: 0px auto 50px auto;">
                <tr>
                    <th>Mã món ăn</th>
                </tr>
                    <?php
                        for($i = 1; $i <= $n; $i++){
                    ?>
                        <tr>
                            <td>
                                <input autocomplete="off" type="text" id="<?php echo $i . 'id_tv';?>" name="<?php echo $i . 'id_tv';?>" size="20">
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
    session_start();

    require 'connect-select-db.php';

    if(!isset($_SESSION['tendn'])){
        echo "Vui lòng đăng nhập!";
        die();
    }

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
                        del_table_plant($n);
                        break;
                    case 'dongvat':
                        del_table_animal($n);
                        break;
                    case 'noithat':
                        del_table_interior($n);
                        break;
                    case 'boicanh':
                        del_table_background($n);
                        break;
                    case 'kieutoc':
                        del_table_hair($n);
                        break;
                    case 'nghenghiep':
                        del_table_profession($n);
                        break;
                    case 'vatdung':
                        del_table_implement($n);
                        break;
                    case 'trangphuc':
                        del_table_costume($n);
                        break;
                    case 'monan':
                        del_table_dish($n);
                        break;
                }
            }else{
                echo "Vui lòng chọn mục cần xoá!";
            }
        }
    }

?>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery-1.8.2.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script>
    $("#ins-tv").click(function(){
        $.post($("#form-del").attr("action"),
                $("#form-del").serializeArray(),        
                function(thongtin){ 
                    $("#test-tv").hide();
                    $("#test-tv").empty();
                    $("#test-tv").html(thongtin).fadeIn(1000);
                    setTimeout(function(){
                        $("#test-tv").fadeOut('fast');
                    }, 5000);
                });
        $("#form-del").submit(function(){
            return false;
        });
    }); 
</script>