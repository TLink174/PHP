<?php
    include ('inc/connect.inc');
    $lop = $_GET['lop'];

    $sql = "SELECT * FROM sinhvien WHERE lop = '$lop'";
    $rs = mysqli_query($conn, $sql);
    $str = "<table>
    <tr class=hd>
        <td>TT</td>
        <td>Mã số</td>
        <td>Họ tên</td>
        <td>Địa chỉ</td>
    </tr>";
    $tt = 1;
    while ($row = mysqli_fetch_array($rs)) {
        $str .= "<tr>
        <td>{$tt}</td>
        <td>{$row['masv']}</td>
        <td>{$row['hoten']}</td>
        <td>{$row['diachi']}</td>
    </tr>";
    $tt ++;
    }
    $str .= "</table>";

    echo $str;
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr class="hd">
            <td>TT</td>
            <td>Mã số</td>
            <td>Họ tên</td>
            <td>Địa chỉ</td>
        </tr>
        <?php 
            $stt = 1;
            while ($row = mysqli_fetch_array($rs)) {
        ?>
        <tr>
            <td><?php $stt ?></td>
            <td><?php $row['masv'] ?></td>
            <td><?php $row['hoten'] ?></td>
            <td><?php $row['diachi'] ?></td>
        </tr>
        <?php 
        $stt++;
            }
        ?>
    </table>
</body>
</html> -->
