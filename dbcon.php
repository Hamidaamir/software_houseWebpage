<?php

$servername = "localhost";
$username = "root";
$password = "" ;
$database = "software_house";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected Successfully";
} catch (PDOException $e) {
    echo "Connection failed" .$e->getMessage();
}

?>