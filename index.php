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
    <?php

   
        while ($outputs = mysqli_fetch_assoc($result)) {
            echo $outputs['first_name'] . "</br>";
        };
    


    ?>


</body>

</html>