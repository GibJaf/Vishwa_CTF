<?php
session_start();
    
$username = "";
$email = "";
$errors = array();
error_reporting(E_ALL ^ E_WARNING); 

function prin()
{
    echo "Hello";

}

function print_data($i)
{
        $db = mysqli_connect('localhost','root','','registration');
        $q1 = "SELECT * FROM quest_easy WHERE id='$i'";
        $usr =mysqli_query($db,$q1);
        $row = $usr->fetch_assoc();
        //echo "User : ".$row["username"]."<br>Helloasdf\r<br>Pass \n".$row["password"];
        return $row["Questi"];
}
function print_ans($i)
{
        $db = mysqli_connect('localhost','root','','registration');
        $q1 = "SELECT * FROM quest_easy WHERE id='$i'";
        $usr =mysqli_query($db,$q1);
        $row = $usr->fetch_assoc();
        //echo "User : ".$row["username"]."<br>Helloasdf\r<br>Pass \n".$row["password"];
        return $row["Ans"];
}

function player_name($i)
{
        $db = mysqli_connect('localhost','root','','registration');
        $q1 = "SELECT * FROM quest_easy WHERE id='$i'";
        $usr =mysqli_query($db,$q1);
        $row = $usr->fetch_assoc();
        if(mysqli_num_rows($row) > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
}

echo "<BR>";

?>