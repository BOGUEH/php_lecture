<?php
include 'connection.php';

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$password = $_POST['password'];



$sql = "INSERT INTO users (first_name, last_name, email, pasword) VALUES ( ?, ?, ?, ?);";

$stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo    "SQL stement failed";
    } else {
        
        //bind the parameter to the place holder
        mysqli_stmt_bind_param($stmt, 'ssss', $first, $last,$email,$password);
        //run parameter inside database

        mysqli_stmt_execute($stmt);
        
    }

header("Location: index.php");


?>