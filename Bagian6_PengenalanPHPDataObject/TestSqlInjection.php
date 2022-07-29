<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$username = "admin";
$password = "abcde";
$sql = "SELECT * FROM db_sikampus WHERE username = '$username' AND password = '$password';";

$statement = $connection->query($sql);

$success = false;
$find_user = null;
foreach ($statement as $row) {
    //sukses
    $success = true;
    $find_user = $row["username"];
}

if ($success) {
    echo "Sukses Login : " . $find_user . PHP_EOL;
} else {
    echo "Gagal Login : " . $find_user . PHP_EOL;
}

$connection = null;
