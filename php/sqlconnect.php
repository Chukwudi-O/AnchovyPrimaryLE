<?php
$host = 'localhost';
$dbName = 'apsle';
$user = 'root';
$pw = '';
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbName",$user,$pw);
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
?>