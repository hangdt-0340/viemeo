<?php
    //Starting session
    session_start();
    //isset() hàm kiểm tra
    if (isset($_SESSION['username'])){ 
        unset($_SESSION['username']); //unset() hàm hủy session 
        header('location: index.php');
    }
    else {
        header('location: index.php');
    }
?>