<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Въвеждане на музикална компания</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <form action="" method="post">
            Музикална компания: <input type="text" name="label_title"> <br>
            <input type="submit" name="submit" value="Добави">
        </form>
        <?php
        include "../functions.php";
        include "../config.php";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $label_title = $_POST["label_title"];
            
            $tableName = "label";

            if(!empty($label_title)){
                $sql = "INSERT INTO $tableName (label_title)
                        VALUES ('$label_title')";
                $result = mysqli_query($link, $sql);
                if(!$result){
                    die("Error with query" . mysqli_error($link));
                }
                selectAll($tableName);
            }
            else{
                echo "Cannot have empty values!";
            }
            backToIndexButton();
        }
        
        ?>
    </body>
</html>
