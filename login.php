<?php
session_start();
include 'database.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql="SELECT * from signup WHERE username='$username' AND password ='$password'";
$result=$conn->query($sql);

if(!$row=$result->fetch_assoc())
{
    header("Location:error.php");
}
 else { 
     
    $_SESSION['name'] = $_POST['username'];
        header("Location:home.php");
}
?>