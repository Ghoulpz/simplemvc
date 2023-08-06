<?php
$path = $_SERVER['REQUEST_URI'];
$content = "Страница не найдена";
if($path == "/getUsers") {
    User::GetUsers();
}