<?php
error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$dbname="bank";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
  echo ""; 
}
else
{
    die("connection failed bcoz".mysqli_connect_error());
}
?>