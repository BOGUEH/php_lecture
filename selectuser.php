<?php

    $data = 1;

    //created a template
    $sql = "SELECT * FROM users WHERE user_id = ?;";

    //create a prepare statment
    $stmt = mysqli_stmt_init($conn);

    if (! mysqli_stmt_prepare($stmt, $sql)) {
        echo    "SQL stement failed";
    } else {
        
        //bind the parameter to the place holder
        mysqli_stmt_bind_param($stmt, 's', $data);

        //run parameter inside database
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        while ($row =  mysqli_fetch_assoc($result)) {
            echo $row['user_id'] . "<br>";
        };
    }

?>