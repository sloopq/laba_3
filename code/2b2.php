<?php
session_start();

if (isset($_SESSION["name"]) && $_SESSION["surname"] && $_SESSION["age"]){
    $_SESSION["user_name"] = $_SESSION["name"];
    $_SESSION["user_surname"] = $_SESSION["surname"];
    $_SESSION["user_age"] = $_SESSION["age"];
}
if (isset($_SESSION["user_name"]) && $_SESSION["user_surname"] && $_SESSION["user_age"]){
    echo "Имя: ". $_SESSION["user_name"] . "<br />";
    echo "Фамилия: ". $_SESSION["user_name"] . "<br />";
    echo "Возраст: ". $_SESSION["user_name"];
}