<?php

$dbserver = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'test';


$conn = mysqli_connect($dbserver, $dbusername, $dbpassword, $dbname);

$sql = "SELECT * FROM users;";

$result = mysqli_query($conn, $sql);

$resultmatchquery = mysqli_num_rows($result);
