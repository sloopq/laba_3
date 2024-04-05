<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["age"] = $_POST["age"];
    $_SESSION["phone"] = $_POST["phone"];
    $_SESSION["add"] = $_POST["add"];

    // Перенаправление на вторую страницу
    header("Location: 2c2.php");
    exit();
}
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Форма ввода данных</title>
</head>
<body>
<form action="" method="post">
    <label for="name">Имя:</label>
    <input type="text" name="name" id="" required>

    <label for="age">Возраст:</label>
    <input type="text" name="age" id="" required>
    
    <label for="phone">Номер телефона:</label>
    <input type="text" name="phone" id="" required>

    <label for="add">Адрес:</label>
    <input type="text" name="add" id="" required>

    <input type="submit" value="Отправить">
</form>
</body>
</html>