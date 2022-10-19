<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Webboard's Nawapat</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<?php
if (!isset($_SESSION["id"])) {
?>

  <body>
    <div class="container fluid">
      <h1>
        <center>Webboard's Nawapat</center>
      </h1>

      <?php include "nav.php" ?>

      <br>
      <div class="d-flex">
        <div>
          <label>หมวดหมู่</label>
          <span class="dropdown">
            <button class="btn btn-light dropdown-toggle btn-bs" type="data" id="button2" data-bs-toggle="dropdown" aria-expanded="false">
              --ทั้งหมด--
            </button>
            <ul class="dropdown-menu" aria-labelledby="button2">
              <li><a href="#" class="dropdown-item">ทั้งหมด</a></li>
              <li><a href="#" class="dropdown-item">เรื่องเรียน</a></li>
              <li><a href="#" class="dropdown-item">ทั่วไป</a></li>
            </ul>
          </span>
        </div>
      </div>

      <br>
      <table class="table table-striped">
        <?php
        for ($i = 1; $i <= 10; $i++) {
          echo "<tr><td><a href=post.php?id=" . $i . " style=text-decoration:none>กระทู้ที่" . $i . "</a></td></tr>";
        }
        ?>


      </table>
        <!-- <li><a href="post.php?id=1" >กระทู้ที่ 1</a></li>
        <li><a href="post.php?id=2" >กระทู้ที่ 2</a></li>
        <li><a href="post.php?id=3" >กระทู้ที่ 3</a></li>
        <li><a href="post.php?id=4" >กระทู้ที่ 4</a></li>
        <li><a href="post.php?id=5" >กระทู้ที่ 5</a></li> -->
      </ul>
    </div>
  </body>
<?php
} else {
?>

  <body>
    <div class="container fluid">
      <h1>
        <center>Webboard's Nawapat</center>
      </h1>
      <?php include "nav.php" ?>
      <br>
      <div>
        <label>หมวดหมู่</label>
        <span class="dropdown">
          <button class="btn btn-light dropdown-toggle btn-bs" type="data" id="button2" data-bs-toggle="dropdown" aria-expanded="false">
            --ทั้งหมด--
          </button>
          <ul class="dropdown-menu" aria-labelledby="button2">
            <li><a href="#" class="dropdown-item">ทั้งหมด</a></li>
            <li><a href="#" class="dropdown-item">เรื่องเรียน</a></li>
            <li><a href="#" class="dropdown-item">ทั่วไป</a></li>
          </ul>
        </span>
      </div>
      <a href="newpost.php"> สร้างกระทู้ใหม่</a>
      <br />
      <ul>
        <!-- <li><a href="post.php?id=1" >กระทู้ที่ 1</a></li>
        <li><a href="post.php?id=2" >กระทู้ที่ 2</a></li>
        <li><a href="post.php?id=3" >กระทู้ที่ 3</a></li>
        <li><a href="post.php?id=4" >กระทู้ที่ 4</a></li>
        <li><a href="post.php?id=5" >กระทู้ที่ 5</a></li> -->

        <?php

        for ($i = 1; $i <= 10; $i++) {
          echo "<li><a href=post.php?id=" . $i . ">กระทู้ที่" . $i . "</a>";
          if ($_SESSION["role"] == 'a') {
            echo "&emsp;<a href=delete.php?id=$i>ลบ</a> ";
          }
          echo "</li>";
        }

        ?>
      </ul>
    </div>
  </body>

<?php
}
?>

</html>