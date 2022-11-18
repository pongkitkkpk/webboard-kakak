<?php

session_start();
$login = $_POST['login'];
$passwd = $_POST['pwd'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$email = $_POST['email'];

$conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");
//$conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");

$passwd = sha1($passwd);

//ออกสอบ
$sql = "SELECT * FROM user WHERE login = '$login'";
$result = $conn->query($sql); //แสดงผลข้อมูลในตาราง
if ($result->rowCount() == 1) {
  $_SESSION["add_login"] = "error";
} else {
  $sql = "INSERT INTO user (login,password,name,gender,email,role) 
             VALUES('$login','$passwd','$name','$gender','$email','m')";
  $conn->exec($sql);  //นำเข้าข้อมูลเข้าฐานข้อมูล
  $_SESSION['add_login'] = 'success';
}
$conn = null;
header("location:register.php");
die();
?>