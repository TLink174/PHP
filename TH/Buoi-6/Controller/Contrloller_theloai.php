
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

include '../config.php';
include '../class/class.db.theloai.php';

$db_theloai = new db_theloai();

$theloai_arr = $db_theloai->get_theloai();
if(count($theloai_arr) == 0) {
?>
<p>Không có thể loại</p>
<a href="Controller_theloai_them.php">THÊM THỂ LOẠI</a>
<?php
}else {
?>
<h1>Quản trị thể loại</h1>
<table width="100%" id="bang_quantri" cellpadding="10" cellspacing="0">
    <tr><th>Tên thể loại</th>
    <th>Thứ tự</th>
    <th>Ẩn hiện</th>
    <th colspan="2"><a href="Controller_theloai_them.php">Thêm thể loại</a></th>
</tr>
<?php
foreach ($theloai_arr as $item) {
?>
<tr>
    <td><?php $item['TenTL']?></td>
    <td><?php $item['ThuTu'] ?></td>
    <td><?php $item['AnHien'] ?></td>
    <td><a href="Controller_sua_theloai.php?id=<?php $item['idTL'] ?>">Sửa</a></td>
    <td><a href="Controller_delete.php?id=<?php $item['idTL'] ?>" onclick="return confirm(\'Bạn có thực sự muốn xoá\'">Xoá</a></td>
</tr>
</table>
<?php
        }
    }
?>
</body>
</html>