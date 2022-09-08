<?php

include('../connect.php');
$icon=$_FILES['image']['name'];
$anhminhhoa_tmp=$_FILES['image']['tmp_name'];
move_uploaded_file($anhminhhoa_tmp,"../img/".$icon);

$theloai = $_POST["TenTL"];
$thutu = $_POST["ThuTu"];
$roll = $_POST["AnHien"];

$sql = "INSERT INTO theloai(idTL, TenTL, ThuTu, AnHien, icon) VALUES ('', '$theloai', '$thutu', '$roll', '$icon')";

if (mysqli_query($conn, $sql)) {

	header("Location: ../theloai.php");

} else {
    echo "Lỗi: " . $sql . $conn->error;
}
?> 