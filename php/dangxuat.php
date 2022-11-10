<?php
    session_start();

    if(isset($_SESSION['tendn'])){
        unset($_SESSION['tendn']);
    }

    header("Location: trangchuno.php");
?>