<?php
session_start();
if (isset($_SESSION["name"]) && isset($_SESSION["age"]) && isset($_SESSION["phone"]) && isset($_SESSION["add"])){
    $_SESSION["user"] = [
        "name"  => $_SESSION["name"],
        "age"   => $_SESSION["age"],
        "phone" => $_SESSION["phone"],
        "add"   => $_SESSION["add"]

    ];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page2</title>
</head>
<body>
    <ul>
        <?php
            if (isset($_SESSION['user'])) {
                foreach ($_SESSION['user'] as $key => $value) {
                    echo "<li>" . $key . ": " . $value . "</li>";
                }
            }
        ?>
    </ul>
</body>
</html>