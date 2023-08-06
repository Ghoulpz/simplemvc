<?php
include 'simplemvc/database.php';
class User{
    public static function GetUsers(){
    $mysqli = new mysqli("localhost", "root", "", "users");
        $sql = 'SELECT * from "users"';
    }

}