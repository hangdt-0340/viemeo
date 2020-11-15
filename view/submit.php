<?php
//starting session
session_start();
$fname = $_POST['fname'];
$pass = $_POST['pass'];

//connect to database php
$hostName = 'localhost';
$userName = 'root';
$passWord = '';
$databaseName = 'viemeo';

//Create connection
$connect = new mysqli($hostName, $userName, $passWord, $databaseName);

//Kiem tra connect
if(!$connect) {
    die("Connection failed: " .mysqli_connect_error());
}

//Kiem tra data nhap vao co trung voi database
//Cau truy van
$sql = 'SELECT * FROM users';

//Run cau truy van
$result = $connect->query($sql);

//Kiem tra xem co du lieu tra ve khong
if($result && $result->num_rows > 0){
    $i = 1;
    while($rows = $result->fetch_assoc()) {
        if($fname == $rows['username'] && $pass == $rows['password']){
            $_SESSION['username'] = $fname;
            $_SESSION['password'] = $pass;
            header('location: index.php');
            exit();
        }
    }
}
else {
    echo 'Connection falied' .$connect->error;
}

//Close Connect
$connect->close();
?>