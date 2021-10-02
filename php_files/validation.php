<?php

session_start();

$con = mysqli_connect('localhost','root','12345678');

mysqli_select_db($con, 'socialapp');

$username = $_POST['username'];
$password = $_POST['password']; 
$email = $_POST['email'];

$s = " select * from usertable where username = '$username' && password = '$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num==1)
{
    $_SESSION['username'] = $username; // this will store the value of username to be accessed in other pages by using $_SESSION['username]
    
    echo "Loggin you in";
    
    header('location:../index.php');
}
else
{
    header('location:login.php');
}

?>