<?php
    session_start();

    $m = $_POST['m'];

    if($m < 1 || $m > 10){
        echo "<h3>Vui lòng chọn trong khoảng 1 -> 10</h3>";
        die();
    }
    ?>
        <form action="update_type_user.php" id ="form_type_user" method="POST">
            <table border = "1" style="margin: 0px auto 0px auto;">
                <tr>
                    <th>Mã thành viên</th>
                    <th>Cấp tài khoản</th>
                </tr>
                <?php
                    for($i = 1; $i <= $m; $i++){
                ?>
                            <tr>
                                <td>
                                    <input autocomplete="off" type="text" id="<?php echo $i . 'id_user';?>" name="<?php echo $i . 'id_user';?>" size="20">
                                </td>
                                <td>
                                    <select name="<?php echo $i . 'captk';?>" id="<?php echo $i . 'captk';?>">
                                        <option value="khong">Không</option>
                                        <option value="Admin">Admin</option>
                                        <option value="User">User</option>
                                    </select> 
                                </td>
                            </tr>
                            <input type="hidden" name="m" value="<?php echo $m;?>">
                <?php
                    }
                ?>
            </table>
            <div style="text-align: center; padding-bottom: 15px">
                <input type="submit" id = "ins-tv" name="ins-tv" value="Gửi">
            </div>
        </form>
    <?php
?>

<script>
    $("#ins-tv").click(function(){
        $.post($("#form_type_user").attr("action"),
                $("#form_type_user").serializeArray(),        
                function(thongtin){ 
                    $("#test-user").hide();
                    $("#test-user").empty();
                    $("#test-user").html(thongtin).fadeIn(1000);
                    setTimeout(function(){
                        $("#test-user").fadeOut('fast');
                    }, 10000);
                });
        $("#form_type_user").submit(function(){
            return false;
        });
    }); 
</script>