<?php
session_start();

include 'database.php';
$message = $_POST['msg'];
$name= $_SESSION['name'];



$sql = "INSERT INTO messages (message,name) VALUES ('$message','$name')";

$stmt = $conn -> prepare("INSERT INTO messages (message,name) VALUES (?,?)");
$stmt->bind_param("ss", $messagePrepared, $namePrepared);




$messagePrepared = $message;
$namePrepared = $name;

$stmt->execute();

header("Location:home.php");



?>