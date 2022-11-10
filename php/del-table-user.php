<?php
    $n = $_POST['n'];
    if($n < 1 || $n > 10){
        echo "<h3>Vui lòng chọn trong khoảng 1 -> 10</h3>";
        die();
    }
    ?>
        <form action="delete_user.php" id ="form_del_user" method="POST">
            <table border = "1" style="margin: 0px auto 0px auto;">
                <tr>
                    <th>Mã thành viên</th>
                </tr>
                <?php
                    for($i = 1; $i <= $n; $i++){
                ?>
                            <tr>
                                <td>
                                    <input autocomplete="off" type="text" id="<?php echo $i . 'id_user';?>" name="<?php echo $i . 'id_user';?>" size="20">
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
?>

<script>
    $("#ins-tv").click(function(){
        $.post($("#form_del_user").attr("action"),
                $("#form_del_user").serializeArray(),        
                function(thongtin){ 
                    $("#test-tv").hide();
                    $("#test-tv").empty();
                    $("#test-tv").html(thongtin).fadeIn(1000);
                    setTimeout(function(){
                        $("#test-tv").fadeOut('fast');
                    }, 10000);
                });
        $("#form_del_user").submit(function(){
            return false;
        });
    }); 
</script>