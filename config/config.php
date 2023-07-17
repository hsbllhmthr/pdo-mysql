<?php
$host = "localhost";
$dbname = "touristdestination";
$port = "3306";
$charset = "utf8mb4";
$dsn = "mysql:host=$host;dbname=$dbname;
        port=$port;charset=$charset";

$user = "root";
$pass = "";

$options = [
    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES=>false
];
?>
