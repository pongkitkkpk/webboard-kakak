<?php
session_start();
if (!isset($_SESSION["id"])) {
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
    <title>newpost</title>
</head>

<body>
    <h1> Webboard Kakkak</h1>
    <hr>
    <form action="" method="get">
        <?php echo "ผู้ใช้ :$_SESSION[username]"; ?>
        <br>
        <table>
            <tr>
                <td>หมวดหมู่ :</td>
                <td><select name="category">
                        <option value="all">--ทั้งหมด--</option>
                        <option value="general">เรื่องทั่วไป</option>
                        <option value="study">เรื่องเรียน</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <p> หัวข้อ :</p>
                </td>
                <td><input type="text" value="" name="title"></td>
            </tr>
            <tr>
                <td>เนื้อหา:</td>
                <td><textarea name="detail" id="h" cols="15" rows="2"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td> <input type="submit" value="บันทึกข้อความ"></td>
            </tr>
        </table>
    </form>



</body>

</html>