<?php

include 'database.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO signup (username,email,password) VALUES ('$username','$email','$password')";

$result = $conn->query($sql);

header("Location:frontpage.php");


?>