<?php
session_start();

if (isset($_POST["name"]) && $_POST["surname"] && $_POST["age"]){
    $_SESSION["user_name"] = $_POST["name"];
    $_SESSION["user_surname"] = $_POST["surname"];
    $_SESSION["user_age"] = $_POST["age"];
}
if (isset($_SESSION["user_name"]) && $_SESSION["user_surname"] && $_SESSION["user_age"]){
    echo "Имя: ". $_SESSION["user_name"] . "<br />";
    echo "Фамилия: ". $_SESSION["user_surname"] . "<br />";
    echo "Возраст: ". $_SESSION["user_age"];
}