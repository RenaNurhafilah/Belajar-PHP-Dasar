<?php

function getConnection(): PDO {
    $host = "localhost";
    $port = 3306;
    $database = "db_sikampus";
    $username = "root";
    $password = "";

    return new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);

}