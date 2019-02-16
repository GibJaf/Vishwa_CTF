<?php
$host="localhost";
$user="root";
$pass="";
$db="dairy";

$conn=mysqli_connect($host,$user,$pass);
mysqli_select_db($conn,$db);

if(isset($_POST['uname'])){
    $username=$_POST['uname'];
    $password=$_POST['pword'];

    $sql="SELECT * from login where uname='".$username."' AND pword='".$password."' limit 1";
    
    $result=mysqli_query($conn,$sql);
    
    $check=mysqli_num_rows($result);
    if($check==1){
        echo "you have logged in sucessfully";
        //exit();
    }
    else{
    echo "Enter correct username/password";
    //exit();
    }
}

?>

<form action="<?php echo $current_file; ?>" method="POST">
<p>Username</p>
<input type="text" name="" placeholder="Enter Username">
<p>Password</p>
<input type="password" name="" placeholder="Enter Password">
<input type="submit" name="" value="Let's Hack">
</form>

<form method="get" action="/php/login.html">
    <button type="submit">Create new user</button>
</form>

