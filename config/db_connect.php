<?php

    // connect to databse 
    $conn = mysqli_connect('localhost', 'root', 'jessie@17', 'heroes_project');

    // check the connection
    if (!$conn) {
        echo 'Connection error: ' . mysqli_connect_error();
    }

?>