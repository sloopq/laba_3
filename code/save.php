<?php
function redirectToHome():  void
{
    header('Location: /');

    exit();
}


if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])){
    redirectToHome();
}

$email = $_POST['email'];
$category = $_POST['category'];
$title = $_POST['title'];
$desc = $_POST['description'];

$filePath = "categories/{$category}/{$title}.txt";
$fileContent = "$email \n $desc";

if (false === file_put_contents($filePath,$fileContent)){
    throw new Exception('404'); 
}
chmod($filePath, 0777);
redirectToHome();
