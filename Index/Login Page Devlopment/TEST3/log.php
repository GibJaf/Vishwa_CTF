<?php
include "connect.php";

$username=$_POST['uname'];
$password=$_POST['pword'];
mysqli_query($conn,"insert into login(uname,pword) values ('$username','$password')"); 
echo $username." ".$password."  added";
?>
