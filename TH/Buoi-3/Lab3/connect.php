<?php

$servername = "localhost";
$username = "root";
$password = "";
$database ="PHP_nam2";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Kết nối thành công";

?>