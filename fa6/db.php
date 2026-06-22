<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "dog_records";
    $conn = "";

    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

    if(!$conn){
        echo"Unsuccessful connection";
    }
?>