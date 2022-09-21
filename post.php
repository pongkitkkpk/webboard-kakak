<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post page</title>
</head>

<body>
    <center>
        <h1> Webboard Kakkak</h1>
        <hr>
        <!-- <p> ต้องการดูกระทู้หมายเลข <?php echo $_GET["id"] ?> </p> -->
        <?php
        $number = $_GET["id"];
        echo "<p> ต้องการดูกระทู้หมายเลข ".$number."";
        if ($number % 2 == 0) {
            echo "<p>เป็นกระทู้หมายเลขคู่</p>";
        } else {
            echo "<p> เป็นกระทู้หมายเลขคี่</p>";
        }
        ?>
        <br>
        <table style="border: 2px solid black; width: 40%">
            <tr>
                <td style="background-color: #6cd2fe">แสดงความคิดดเห็น</td>
            </tr>
            <tr>
                <td>
                    <textarea name="" id="" cols="100" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <input type="submit" value="ส่งข้อความ" />
                </td>
            </tr>
        </table>
        <a href="index.php">กลับไปหน้าหลัก</a>

    </center>
</body>

</html>