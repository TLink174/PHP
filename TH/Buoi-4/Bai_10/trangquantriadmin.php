<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     Trang Quan Tri
    <?php
	if(isset($_COOKIE['username']) and isset($_COOKIE['password'])){
			echo "Xin chào: ".$_COOKIE['username'];
			echo "<br><a href='logout.php'>Logout</a>";
		}
		else{
	if(isset($_SESSION['username']) and isset($_SESSION['password'])){
				echo "Xin chào: ".$_SESSION['username'];
				echo "<br><a href='logout.php'>Logout</a>";
			}
			else
			echo "<script>alert('Bạn chưa đăng nhập'); location.href='login.php';</script>";
		}	
	?>

    <a href="logout.php"> </a>
</body>
</html>

<?php 
if (isset($_SESSION['username']) && isset($_SESSION['password']))
	echo $_SESSION['username'];
else
{
	echo "<script language='javascript'>alert('Ban chua dang nhap - Vui long dang nhap lai');";
			echo "location.href='login.php';</script>";
}
?>