<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Webboard's Nawapat</title>
  </head>
  <body>
    <h1><center>Webboard's Nawapat</center></h1>
    <hr />
    หมวดหมู่:
    <select name="category">
      <option value="all">--ทั้งหมด--</option>
      <option value="general">เรื่องทั่วไป</option>
      <option value="study">เรื่องเรียน</option>
    </select>

    <a href="login.html" style="float: right">เข้าสู่ระบบ</a>
    <br />
    <ul>
        <!-- <li><a href="post.php?id=1" >กระทู้ที่ 1</a></li>
        <li><a href="post.php?id=2" >กระทู้ที่ 2</a></li>
        <li><a href="post.php?id=3" >กระทู้ที่ 3</a></li>
        <li><a href="post.php?id=4" >กระทู้ที่ 4</a></li>
        <li><a href="post.php?id=5" >กระทู้ที่ 5</a></li> -->

        <?php 
        for ($i = 1;$i <= 10;$i++){
          echo "<li><a href=post.php?id=". $i.">กระทู้ที่" . $i."</a></li>";
        }
        ?>
    </ul>
  </body>
</html>