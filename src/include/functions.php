<?php

include_once 'dblink.php';


function get_categories() {
    
    global $link;
    
    $sql = "SELECT * FROM categories";
    
    $object = mysqli_query($link, $sql);
    
    $result = mysqli_fetch_all($object, MYSQLI_ASSOC);
    
    return $result;
}

$categories = get_categories();
