<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./signup.php" method="post">

        <input type="text" name="first" placeholder="first name"> </br>
        <input type="text" name="last" placeholder="last name"> </br>
        <input type="email" name="email" placeholder="email"> </br>
        <input type="password" name="password" placeholder="password"> </br>

        <button type="submit" name="submit" >submit</button>

    </form>


</body>

</html>