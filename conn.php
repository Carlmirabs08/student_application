<?php
   $server = "localhost";
   $username = "root";  
   $password = "";
   $dbname = "studentapplicationdb";

    if(!$conn = mysqli_connect($server, $username, $password, $dbname)){
        die("failed to connect!");
    }
?>