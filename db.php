<?php

function db_connect () {
    $dbhost = 'localhost';
    $dbname = 'saultcollege_map104';
    $dbuser = 'root';
    $dbpass = '';

    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

    return $conn;
}

?>