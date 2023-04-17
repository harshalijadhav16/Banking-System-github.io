<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bankrecord";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
//echo "Connection Successful";
}
else
{
echo "Connection failed".mysqli_connect_error();
}
?>