<?php

session_start();
session_destroy();

header('location:../pages/login.php');

?>

<!-- 
    for checking if someone is already logged in

    if(!isset($_SESSION['username']))
    {
        header('location:login.php);
    }

 -->