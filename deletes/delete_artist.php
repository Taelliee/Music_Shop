<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <?php 
        include '../functions.php';
        $tableName = "artist";
        $tableId = $tableName . "_id";

        selectAll($tableName);
    ?>
    <form action="../delete.php" method="post">
        Пореден номер на изпълнител: <input type="number" name="id"> <br>
        <?php 
            echo "<input type='hidden' name='table' value='$tableName'>";
        ?>

        <input type="submit" name="submit" value="Изтрий">
    </form>
    <body>
   
    </body>
</html>