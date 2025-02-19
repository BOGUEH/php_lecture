<?php
include 'connection.php';

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$password = $_POST['password'];



$sql = "INSERT INTO users (first_name, last_name, email, pasword) VALUES ('$first', '$last', '$email', '$password');";

mysqli_query($conn, $sql);

header("Location: index.php");


?>