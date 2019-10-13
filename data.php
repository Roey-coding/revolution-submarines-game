<?php
session_start();
$user = 'root';
$pass = '';
$db = 'users';
$db= new mysqli('localhost', $user, $pass, $db) or die("unable to connect");
$session_var = $_SESSION["user"];
$qurey = "SELECT * FROM `users` WHERE name = '$session_var'";
$response = mysqli_query($db,$qurey);
$row = mysqli_fetch_array($response);

echo json_encode($row);

?>