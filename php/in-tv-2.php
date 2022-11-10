
    <?php
            function ins_plant($n, $tendn){
                require 'connect-select-db.php';

                for($i = 1; $i <= $n; $i++){
                    $ten = $_POST[$i . 'tentv'];
                    $ynghia = $_POST[$i . 'ynghia_tv'];
                    $cauchuyen = $_POST[$i . 'cauchuyen_tv'];
                    $link = $_POST[$i . 'link_tv'];
                    $loai = $_POST[$i . 'loaitv'];

                    if($ten != ''){
                        $sql = "SELECT * FROM thucvat where tenTV = '$ten'";
                        $result = $conn->query($sql);
            
                        if($result->num_rows > 0){
                            echo nl2br($i . ". Tên thực vật đã tồn tại!\n");
                        }else{
                            $status = $statusMsg = ''; 
                            
                                $status = 'error'; 
                                if(!empty($_FILES[$i . "image"]["name"])) { 
                        
                                    $fileName = basename($_FILES[$i . "image"]["name"]); 
                                    $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
                        
                                    $allowTypes = array('jpg','png','jpeg','gif'); 
                                    if(in_array($fileType, $allowTypes)){ 
                                        $image = $_FILES[$i . 'image']['tmp_name']; 
                                        $imgContent = addslashes(file_get_contents($image)); 
                        
                        
                                        $sql2 = "INSERT INTO thucvat(tenTV, ynghia, cauchuyen, hinhanh, link, loaiTV, tenTK)
                                        value ('$ten', '$ynghia', '$cauchuyen', '$imgContent', '$link', '$loai', '$tendn')";
                        
                                        $insert = $conn->query($sql2);
                        
                                        if($insert){ 
                                            echo nl2br($i . ". Thêm thành công!\n"); 
                                        }else{ 
                                            echo nl2br($i . ". Hình ảnh không thể tải!\n");
                                        }  
                                    }else{ 
                                        echo nl2br($i . '. Vui lòng chỉ chọn ảnh có đuôi JPG, JPEG, PNG, & GIF\n'); 
                                    } 
                                }else{
                                    $imgContent = "Không";
                            
                                    $sql1 = "INSERT INTO thucvat(tenTV, ynghia, cauchuyen, hinhanh, link, loaiTV, tenTk)
                                        value ('$ten', '$ynghia', '$cauchuyen', '$imgContent', '$link', '$loai', '$tendn')";
                            
                                    $result1 = $conn->query($sql1);
            
                                    if($result1){
                                        echo nl2br($i . ". Thành công!\n");
                                    }else{
                                        echo nl2br($i . ". Thất bại!\n");
                                    }
                                } 
                        }
                    }else{
                        echo nl2br($i . ". Vui lòng nhập tên thực vật!\n");
                    }
                }
            }
        ?>

        <?php
            function ins_animal($n, $tendn){
                require 'connect-select-db.php';
                
                for($i = 1; $i <= $n; $i++){
                    $ten = $_POST[$i . 'tentv'];
                    $ynghia = $_POST[$i . 'ynghia_tv'];
                    $cauchuyen = $_POST[$i . 'cauchuyen_tv'];
                    $link = $_POST[$i . 'link_tv'];
                    $loai = $_POST[$i . 'loaitv'];

                    if($ynghia == '' || $cauchuyen == '' || $link == ''){
                        $ynghia = "Không";
                        $cauchuyen = "Không";
                        $link = "Không";
                    }
            
                    if($ten != ''){
                        $sql = "SELECT * FROM dongvat where tenDV = '$ten'";
                        $result = $conn->query($sql);
            
                        if($result->num_rows > 0){
                            echo nl2br($i . ". Tên động vật đã tồn tại!\n");
                        }else{
                            $status = $statusMsg = ''; 
                            
                                $status = 'error'; 
                                if(!empty($_FILES[$i . "image"]["name"])) { 
                        
                                    $fileName = basename($_FILES[$i . "image"]["name"]); 
                                    $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
                        
                                    $allowTypes = array('jpg','png','jpeg','gif'); 
                                    if(in_array($fileType, $allowTypes)){ 
                                        $image = $_FILES[$i . 'image']['tmp_name']; 
                                        $imgContent = addslashes(file_get_contents($image)); 
                        
                        
                                        $sql2 = "INSERT INTO dongvat(tenDV, ynghia, cauchuyen, hinhanh, link, lopDV, tenTK)
                                        value ('$ten', '$ynghia', '$cauchuyen', '$imgContent', '$link', '$loai', '$tendn')";
                        
                                        $insert = $conn->query($sql2);
                        
                                        if($insert){ 
                                            echo nl2br($i . ". Thêm thành công!\n"); 
                                        }else{ 
                                            echo nl2br($i . ". Hình ảnh không thể tải!\n");
                                        }  
                                    }else{ 
                                        echo nl2br($i . '. Vui lòng chỉ chọn ảnh có đuôi JPG, JPEG, PNG, & GIF\n'); 
                                    } 
                                }else{
                                    $imgContent = "Không";
                            
                                    $sql1 = "INSERT INTO dongvat(tenDV, ynghia, cauchuyen, hinhanh, link, lopDV, tenTK)
                                        value ('$ten', '$ynghia', '$cauchuyen', '$imgContent', '$link', '$loai', '$tendn')";
                            
                                    $result1 = $conn->query($sql1);
            
                                    if($result1){
                                        echo nl2br($i . ". Thành công!\n");
                                    }else{
                                        echo nl2br($i . ". Thất bại!\n");
                                    }
                                } 
                        }
                    }else{
                        echo nl2br($i . ". Vui lòng nhập tên động vật!\n");
                    }
                }
            }
        ?>

        <?php
            function ins_interior($n, $tendn){
                require 'connect-select-db.php';
                
                for($i = 1; $i <= $n; $i++){
                    $ten = $_POST[$i . 'tentv'];
                    $loai = $_POST[$i . 'loaitv'];
            
                    if($ten != ''){
                        $sql = "SELECT * FROM noithat where tenNT = '$ten'";
                        $result = $conn->query($sql);
            
                        if($result->num_rows > 0){
                            echo nl2br($i . ". Tên nội thất đã tồn tại!\n");
                        }else{
                            $sql1 = "INSERT INTO noithat(tenNT, lopNT, tenTK) values ('$ten','$loai','$tendn')";
                            $result1 = $conn->query($sql1);

            
                            if($result1){
                                echo nl2br($i . ". Thành công!\n");
                            }else{
                                echo nl2br($i . ". Thất bại!\n");
                            }
                        }
                    }else{
                        echo nl2br($i . ". Vui lòng nhập tên nội thất!\n");
                    }
                }
            }
        ?>


        <?php
            function ins_background($n, $tendn){
                require 'connect-select-db.php';
                
                for($i = 1; $i <= $n; $i++){
                    $ten = $_POST[$i . 'tentv'];
            
                    if($ten != ''){
                        $sql1 = "SELECT * FROM boicanh where tenBC = '$ten'";
                        $result1 = $conn->query($sql1);


                        if($result1->num_rows > 0){
                            echo nl2br($i . ". Tên bối cảnh đã tồn tại!\n");
                        }else{
                            $sql = "INSERT INTO boicanh(tenBC,tenTK) values ('$ten','$tendn')";
                            $result = $conn->query($sql);

                            if($result){
                                echo nl2br($i . ". Thêm thành công!\n");
                            }else{
                                echo nl2br($i. ". Thêm thất bại!\n");
                            }
                        }

                    }else{
                        echo nl2br($i . ". Vui lòng nhập nội dung bối cảnh!\n");
                    }
                }
            }
        ?>

        <?php
            function ins_hair($n, $tendn){
                require 'connect-select-db.php';
                
                for($i = 1; $i <= $n; $i++){
                    $ten = $_POST[$i . 'tentv'];
                    $link = $_POST[$i . 'link_tv'];

                    if($link == ''){
                        $link = "Không";
                    }
            
                    if($ten != ''){
                        $sql = "SELECT * FROM kieutoc where tenKT = '$ten'";
                        $result = $conn->query($sql);
            
                        if($result->num_rows > 0){
                            echo nl2br($i . ". Tên kiểu tóc đã tồn tại!\n");
                        }else{
                            $status = $statusMsg = ''; 
                            
                                $status = 'error'; 
                                if(!empty($_FILES[$i . "image"]["name"])) { 
                        
                                    $fileName = basename($_FILES[$i . "image"]["name"]); 
                                    $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
                        
                                    $allowTypes = array('jpg','png','jpeg','gif'); 
                                    if(in_array($fileType, $allowTypes)){ 
                                        $image = $_FILES[$i . 'image']['tmp_name']; 
                                        $imgContent = addslashes(file_get_contents($image)); 
                        
                        
                                        $sql2 = "INSERT INTO kieutoc(tenKT, hinhanh, link, tenTK)
                                        value ('$ten', '$imgContent', '$link', '$tendn')";
                        
                                        $insert = $conn->query($sql2);
                        
                                        if($insert){ 
                                            echo nl2br($i . ". Thêm thành công!\n"); 
                                        }else{ 
                                            echo nl2br($i . ". Hình ảnh không thể tải!\n");
                                        }  
                                    }else{ 
                                        echo nl2br($i . '. Vui lòng chỉ chọn ảnh có đuôi JPG, JPEG, PNG, & GIF\n'); 
                                    } 
                                }else{
                                    $imgContent = "Không";
                            
                                    $sql1 = "INSERT INTO kieutoc(tenKT, hinhanh, link, tenTK)
                                        value ('$ten', '$imgContent', '$link', '$tendn')";
                            
                                    $result1 = $conn->query($sql1);
            
                                    if($result1){
                                        echo nl2br($i . ". Thành công!\n");
                                    }else{
                                        echo nl2br($i . ". Thất bại!\n");
                                    }
                                } 
                        }
                    }else{
                        echo nl2br($i . ". Vui lòng nhập tên kiểu tóc!\n");
                    }
                }
            }
        ?>

        <?php
            function ins_profession($n, $tendn){
                require 'connect-select-db.php';
                
                for($i = 1; $i <= $n; $i++){
                    $ten = $_POST[$i . 'tentv'];
            
                    if($ten != ''){
                        $sql1 = "SELECT * FROM nghenghiep where tenNN = '$ten'";
                        $result1 = $conn->query($sql1);

                        if($result1->num_rows > 0){
                            echo nl2br($i . ". Tên nghề nghiệp đã tồn tại!\n");
                        }else{
                            $sql = "INSERT INTO nghenghiep(tenNN,tenTK) values ('$ten','$tendn')";
                            $result = $conn->query($sql);
    
                            if($result){
                                echo nl2br($i . ". Thêm thành công!\n");
                            }else{
                                echo nl2br($i. ". Thêm thất bại!\n");
                            }
                        }
                    }else{
                        echo nl2br($i . ". Vui lòng nhập tên nghề nghiệp!\n");
                    }
                }
            }
        ?>

        <?php
            function ins_implement($n, $tendn){
                require 'connect-select-db.php';
                
                for($i = 1; $i <= $n; $i++){
                    $ten = $_POST[$i . 'tentv'];
            
                    if($ten != ''){
                        $sql1 = "SELECT * FROM vatdung where tenVD = '$ten'";
                        $result1 = $conn->query($sql1);


                        if($result1->num_rows > 0){
                            echo nl2br($i . ". Tên vật dụng đã tồn tại!\n");
                        }else{
                            $sql = "INSERT INTO vatdung(tenVD,tenTK) values ('$ten','$tendn')";
                            $result = $conn->query($sql);
    
                            if($result){
                                echo nl2br($i . ". Thêm thành công!\n");
                            }else{
                                echo nl2br($i. ". Thêm thất bại!\n");
                            }
                        }
                    }else{
                        echo nl2br($i . ". Vui lòng nhập tên vật dụng!\n");
                    }
                }
            }
        ?>

        <?php
            function ins_costume($n, $tendn){
                require 'connect-select-db.php';

                for($i = 1; $i <= $n; $i++){
                    $ten = $_POST[$i . 'tentv'];
                    $tenqg = $_POST[$i . 'tenqg'];
                    $link = $_POST[$i . 'link_tv'];

                    if($link == ''){
                        $link = "Không";
                    }
            
                    if($ten != ''){
                        $sql = "SELECT * FROM trangphuc where tenTP = '$ten'";
                        $result = $conn->query($sql);
            
                        if($result->num_rows > 0){
                            echo nl2br($i . ". Tên trang phục đã tồn tại!\n");
                        }else{
                            $status = $statusMsg = ''; 
                            
                                $status = 'error'; 
                                if(!empty($_FILES[$i . "image"]["name"])) { 
                        
                                    $fileName = basename($_FILES[$i . "image"]["name"]); 
                                    $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
                        
                                    $allowTypes = array('jpg','png','jpeg','gif'); 
                                    if(in_array($fileType, $allowTypes)){ 
                                        $image = $_FILES[$i . 'image']['tmp_name']; 
                                        $imgContent = addslashes(file_get_contents($image)); 
                        
                        
                                        $sql2 = "INSERT INTO trangphuc(tenTP, hinhanh, tenQG, link, tenTK)
                                        value ('$ten', '$imgContent', '$tenqg', '$link','$tendn')";
                        
                                        $insert = $conn->query($sql2);
                        
                                        if($insert){ 
                                            echo nl2br($i . ". Thêm thành công!\n"); 
                                        }else{ 
                                            echo nl2br($i . ". Hình ảnh không thể tải!\n");
                                        }  
                                    }else{ 
                                        echo nl2br($i . '. Vui lòng chỉ chọn ảnh có đuôi JPG, JPEG, PNG, & GIF\n'); 
                                    } 
                                }else{
                                    $imgContent = "Không";
                            
                                    $sql1 = "INSERT INTO trangphuc(tenTP, hinhanh, tenQG, link, tenTK)
                                        value ('$ten','$imgContent', '$tenqg', '$link', '$tendn')";
                            
                                    $result1 = $conn->query($sql1);
            
                                    if($result1){
                                        echo nl2br($i . ". Thành công!\n");
                                    }else{
                                        echo nl2br($i . ". Thất bại!\n");
                                    }
                                } 
                        }
                    }else{
                        echo nl2br($i . ". Vui lòng nhập tên trang phục!\n");
                    }
                }

            }

        ?>

        <?php
            function ins_dish($n, $tendn){
                require 'connect-select-db.php';
                
                for($i = 1; $i <= $n; $i++){
                    $ten = $_POST[$i . 'tentv'];
            
                    if($ten != ''){
                        $sql1 = "SELECT * FROM monan where tenMA = '$ten'";
                        $result1 = $conn->query($sql1);

                        if($result1->num_rows > 0){
                            echo nl2br($i . ". Tên món ăn đã tồn tại!\n");
                        }else{
                            $sql = "INSERT INTO monan(tenMA,tenTK) values ('$ten','$tendn')";
                            $result = $conn->query($sql);
    
                            if($result){
                                echo nl2br($i . ". Thêm thành công!\n");
                            }else{
                                echo nl2br($i. ". Thêm thất bại!\n");
                            }
                        }
                    }else{
                        echo nl2br($i . ". Vui lòng nhập tên món ăn!\n");
                    }
                }
            }
        ?>



        <?php
            //File dùng để xử lý thêm thành công hay không thành công
                session_start();

                require 'connect-select-db.php';
                
                if(!isset($_SESSION['tendn'])){
                    echo "Vui lòng đăng nhập!";
                    die();
                }
            
                $tendn = $_SESSION['tendn'];
                $lc = $_SESSION['lc'];
                
                $n = $_POST['n'];

                if($lc != 'khong'){
                    switch($lc){
                        case 'thucvat':
                            ins_plant($n, $tendn);
                            break;
                        case 'dongvat':
                            ins_animal($n, $tendn);
                            break;
                        case 'noithat':
                            ins_interior($n, $tendn);
                            break;
                        case 'boicanh':
                            ins_background($n, $tendn);
                            break;
                        case 'kieutoc':
                            ins_hair($n, $tendn);
                            break;
                        case 'nghenghiep':
                            ins_profession($n, $tendn);
                            break;
                        case 'vatdung':
                            ins_implement($n, $tendn);
                            break;
                        case 'trangphuc':
                            ins_costume($n, $tendn);
                            break;
                        case 'monan':
                            ins_dish($n, $tendn);
                            break;
                    }
                }

        ?>