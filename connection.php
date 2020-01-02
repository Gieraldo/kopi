<?php
$username = "root";
$pass = "";
$host = "localhost";
$db_name = "web";
$connect = mysqli_connect ($host, $username, $pass);
$db = mysqli_select_db ( $connect, $db_name );
?>