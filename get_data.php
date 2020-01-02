<?php
include ('connection.php');

//$sql_insert = "INSERT INTO kopi (id_rfid) VALUES ('".$_GET["rfid=id_rfid"]."')";
$sql_insert = "INSERT INTO kopi (id_rfid) VALUES ('".$_GET["rfid"]."')";

if(mysqli_query($connect,$sql_insert))
{
echo "Done";
mysqli_close($connect);
}
else
{
echo "error waaaa siateh".mysqli_error($connect );
}

?>