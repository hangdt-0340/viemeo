<?php
session_start();
//Khai bao bien
$hostName = 'localhost';
$userName = 'root';
$passWord = '';
$databaseName = 'viemeo';

//Create connection
$connect = new mysqli($hostName, $userName, $passWord, $databaseName);

//Check Connection
if ($connect->connect_error){
    exit('connect failed.' .$connect->connect_error);
}

//Khai bao utf-8 de hien thi duoc tieng viet
header('content-type: text/html; charset=UTF-8');

//Lay data tu file dang ky
$userName_Register = $_POST['username'];
$email_Register = $_POST['email'];
$passWord_Register = $_POST['password'];
$passWord_confirm_Register = $_POST['confirm_password'];

//Kiem tra da nhap du thong tin chua
if(!$userName_Register || !$email_Register || !$passWord_Register || !$passWord_confirm_Register){
    echo 'Please enter enough information. <a href="javascript: history.go(-1)">Back</a>';
    exit();
}

//ma hoa password
// $passWord_Register = md5($passWord_Register);
// $passWord_confirm_Register = md5($passWord_confirm_Register);

//Kiem tra ten dang nhap nay da co nguoi dung chua
$result = $connect->query("SELECT username FROM users WHERE username='$userName_Register'");
if ($result && $result->num_rows > 0){
    $i = 1;
		while($rows = $result->fetch_assoc()) {
			if( $userName_Register == $rows['username']){
                echo "This username already exists. Please choose another username. <a href='javascript: history.go(-1)'>Back</a>";
			}
        }
    $i++;
    exit;
}

//Kiểm tra email từ người dùng nhập đã tồn tại trên database chưa
$result_email = $connect->query("SELECT email FROM users WHERE email='$email_Register'");
if ($result_email && $result_email->num_rows > 0){
    $i = 1;
		while($rows = $result_email->fetch_assoc()) {
			if( $email_Register == $rows['email']){
                // echo "This email already exists. Please choose another email. <a href='javascript: history.go(-1)'>Back</a>";
                echo '<script language = "javascript"> alert("This email already exists. Please choose another email."); window.location="register.php";</script>';
			}
        }
    $i++;
    exit;
}

//Lưu thông tin vào bảng
try {
    $addmember = $connect->query("
    INSERT INTO users(
        user_id,
        username,
        email,
        password,
        confirm_password
    )
    
    VALUES (
        '',
        '{$userName_Register}',
        '{$email_Register}',
        '{$passWord_Register}',
        '{$passWord_confirm_Register}'
    )
");
} catch(Exception $e) {
    print_r($e);
    die();
}


//Thông báo quá trình lưu
if ($addmember)
    header('location: signin.php');
else
    echo "Register failed. <href='register.php'>Try again!</a>";
?>