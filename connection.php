<?php
    $server = "localhost:3306";
    $user = "root";
    $pass = "";
    $database = "project";

    $conn=mysqli_connect($server, $user, $pass, $database);
    
    if ($conn){
        echo "Connected";
    }else{
        echo "Not Connected";
    }
?>