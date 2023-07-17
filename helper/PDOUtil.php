<?php

class PDOUtil{
    public static function getMySQLConnection() : PDO {
        include 'config/config.php';
        return new PDO($dsn, $user, $pass, $options);
    }
}
?>