<?php
    if(isset($_POST['tim'])){
        require 'connect-select-db.php';

        $tim = $_POST['tim'];

            $sql = "SELECT * FROM taikhoan WHERE tenTK LIKE '%{$tim}%'";
            $result = $conn->query($sql);

            if($result->num_rows > 0){?>
                <h3>Thông tin tài khoản</h3>
                <table style = "margin: 0px auto 0px auto" border='1'>
                    <tr>
                        <th>Mã tài khoản</th>
                        <th>Tên đăng nhập</th>
                        <th>Cấp tài khoản</th>
                    </tr>
                    <?php       
                        while($row = $result->fetch_assoc()){
                            $id = $row['maTK'];                            
                            $ten = $row['tenTK'];                                                    
                            $captk = $row['capTK'];                            
                    ?>
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $ten; ?></td>
                        <td><?php echo $captk; ?></td>
                    </tr>
            <?php
                        }
            ?>
                </table>
            <?php
            }else{
                echo "Không có kết quả!";
            }

    }

?>