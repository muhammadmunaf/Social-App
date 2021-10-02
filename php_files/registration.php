<?php

session_start();

header('location:../index.php');

$con = mysqli_connect('localhost','root','12345678');

mysqli_select_db($con, 'socialapp');

$username = $_POST['username'];
$password = $_POST['password']; 
$email = $_POST['email'];

$s = " select * from usertable where username = '$username'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num==1)
{
    echo "Username Already Taken";
}
else
{
    $reg = "insert into usertable(username, password, email) values ('$username', '$password', '$email')";
    mysqli_query($con, $reg);
    echo "Registration Successful";
}

?>