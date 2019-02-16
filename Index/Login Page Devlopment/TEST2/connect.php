<?php
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"dairy");
if(!$conn)
{
    echo "error";
}
else{
    echo "Connected";
}
?>