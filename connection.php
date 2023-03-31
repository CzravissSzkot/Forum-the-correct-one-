<?php 
    $servername = "localhost";
    $username = "root";
    $password = "Polska2234";
    $db_name = "nigger";  
    $conn = new mysqli($servername, $username, $password, $db_name, 3306);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo " ";
    
    ?>