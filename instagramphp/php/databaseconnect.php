<?php
require_once 'pdoconfig.php';
 
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Connected to $dbname at $host successfully.";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}

try {
    $conn = new PDO("mysql:host=$host2;dbname=$dbname2", $username2, $password2);
    echo "Connected to $dbname2 at $host2 successfully.";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname2 :" . $pe->getMessage());
}