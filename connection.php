<?php

    $database= new mysqli("localhost","id21402780_edoc","Bvit@2002","id21402780_edoc");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>