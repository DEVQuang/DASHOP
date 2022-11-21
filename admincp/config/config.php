<?php
$mysqli = new mysqli("localhost","root","","db_dashop");

// Check connection
if ($mysqli->connect_errno) {
  echo "Lỗi kết nối MYSQLi " . $mysqli->connect_error;
  exit();
}
?>