<?php

$link = mysqli_connect("localhost", "root", "", "navbar");

if ($link == false){
    
    echo 'Error: ' . mysqli_connect_error() . mysqli_connect_errno();
    exit();
    
}

