<?php 
session_start();
  if(isset($_SESSION["id"])){
    header("location:index.php");
    die();
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>

<body>
    <h1 style="text-align :center">Webboard Kakkak</h1>
    <hr>
    <div align="center">
        <?php
        $login = $_POST["login"];
        $password = $_POST["pwd"];

        if (($login == "admin") && ($password == "ad1234")) {
            $_SESSION["username"] = "admin";
            $_SESSION["role"] = "a";
            $_SESSION["id"]=session_id();
            echo "<p>ยินดีต้้อนรับเข้าคุณ ADMIN</p>";
        }
        elseif(($login == "member")&&($password == "mem1234")){
            $_SESSION["username"]="member";
            $_SESSION["role"]="m";
            $_SESSION["id"]=session_id();
            echo "<p>ยินดีต้อนรับคุณ MEMBER</p>";
        }
        else{
            echo "<p>ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง</p>";
        }
        ?>
        <a href="index.php"> เข้าสู่หน้าหลัก </a>
    </div>


</body>

</html>