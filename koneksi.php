<?php
$host="localhost";
$username="root";
$pass="";
$db_name="web";
//$url=$_SERVER['REQUEST_URI'];

    $connect = mysqli_connect('localhost','root','','web');
    if (mysqli_connect_errno())
    {
        echo "<script language='javascript'>alert('Gagal Koneksi Database MySql !!')</script>";	
    }else 
      
    

?>