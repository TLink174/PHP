<?php
include("../connect.php");
if(isset($_GET["idTL"]))
{
	$key=$_GET["idTL"];

}
	$sql="DELETE FROM theloai WHERE idTL=".$_GET["idTL"];
//if(mysql_query($sl))
if(mysqli_query($conn,$sql))
{
	echo "<script language='javascript'>alert('Xoa thanh cong');";
		echo "location.href='../theloai.php';</script>";
}


?>
