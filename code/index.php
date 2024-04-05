<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avito</title>
</head>
<body> 
    <div id="form">
    <form action="save.php" method="post">
        <label for="email">Email</label>
        <input type="email" name = "email" required>

        <label for="category">Category</label>
        <select name="category">
        <?php
            $files = scandir('categories');
            foreach($files as $file){
                if($file != '.'&& $file != '..' && $file != '.DS_Store' ){
                    echo "<option value = $file>" .$file. '</option>';
                    
            }
        }
        ?>



            <!-- <option value="cars">cars</option>
            <option value="other">other</option> -->
        </select>

        <label for="title">Title</label>
        <input type="text" name = "title" required>

        <label for="description">Description</label>
        <textarea name="description" rows="1" cols = "10"></textarea>

        <input type="submit" value="Save">
    </form>
    </div>
    <div id="table">
        <table>
            <thead>
                <th>E-mail</th>
                <th>Category</th>
                <th>Title</th>
                <th>Description</th>
            </thead>

            <tbody>
                <?php
                $files = glob("categories/*/*.txt");
                foreach ($files as $file)
                {
                    $arr = file($file);
                    $email = $arr[0];
                    $category = basename(dirname($file));
                    $title = basename($file, ".txt");
                    $description = $arr[1];
                echo "<tr>
                        <td>$email</td>
                        <td>$category</td>
                        <td>$title</td>
                        <td>$description</td>
                    </tr>";
            }
            ?>

            </tbody>
        </table>
    </div>
</body>
</html>