<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
//$mysql_databse='dairy';

$conn=new mysqli($mysql_host,$mysql_user,$mysql_pass);
if(!$conn)
{
    die("connect Failed :".mysqli_connect_error());
}

?>