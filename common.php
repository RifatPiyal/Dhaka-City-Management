<?php

 $conn= new mysqli('localhost', 'root', '', 'City');

    $error_flag = 0;
    $result;
    if ($conn->connect_error) {
        die('connection failed: '.$conn->connect_error);
    }
    

?>