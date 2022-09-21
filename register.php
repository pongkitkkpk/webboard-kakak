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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
  </head>
  <body>
    <center><h1>สมัครสมาชิก</h1></center>
    <hr />
    <center>
      <table style="border: 2px solid black; width: 40%">
        <tr>
          <td style="background-color: #6cd2fe" colspan="2">กรอกข้อมูล</td>
        </tr>
        <tr>
          <td>ชื่อบัญชี :</td>
          <td><input type="text" name="Username" size="50" /></td>
        </tr>
        <tr>
          <td>รหัสผ่าน :</td>
          <td><input type="text" name="Password" size="50" /></td>
        </tr>
        <tr>
          <td>ชื่อ-นามสกุล :</td>
          <td><input type="text" name="Firstname-Lastname" /></td>
        </tr>
        <tr>
          <td>เพศ :</td>
          <td>
            <input type="radio" name="gender" value="man" /> ชาย
            <br />
            <input type="radio" name="gender" value="woman" /> หญิง
            <br />
            <input type="radio" name="gender" value="others" /> อื่นๆ
          </td>
        </tr>
        <tr>
          <td>อีเมล :</td>
          <td><input type="text" name="Email" size="50" /></td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="text" name="submitregister" value="submit" />
          </td>
        </tr>
      </table>
      <br>
      <a href="index.php"> กลับไปที่หน้าหลัก </a>
    </center>
  </body>
</html>
