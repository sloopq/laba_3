<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="" method="post">
        <textarea name="text" id="" cols="30" rows="10"><?php if(isset($_POST['text'])) echo $_POST['text']; ?></textarea> <br>
        <input type="submit" name="submit" value="Подсчет!">
    </form>
    <?php
    if(isset($_POST['submit'])) {
        $text = $_POST['text'];
        $wordCount = preg_match_all('/\p{L}+/u', $text);
        $charCount = mb_strlen($text);
        echo "Количество слов: $wordCount<br />";
        echo "Количество символов: $charCount";
    }
    ?>
</body>
</html>
