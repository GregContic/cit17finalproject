<?php
    $servername ="localhost";
    $username ="root";
    $password ="";
    $dbnme ="cars";


    //Create connection

    $conn=new mysqli($servername, $username, $password, $dbnme);

    if ($conn->connect_error){
        die ("Connection failed". $conn->connect_error);
    }
?>