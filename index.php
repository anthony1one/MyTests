<?php
session_start();

include_once "DataBaseFunctions.php";

//echo session_id();

$arrayNameTests = selectFromTable("Name", "test_info")
?>

<html>
    <head>
        <title>Тесты</title>
        <link rel="stylesheet" href="styles/bootstrap.css">
    </head>
    <body>
        <h1 align="center">Выберите Тест</h1>
        <?php
        foreach ($arrayNameTests as $value) {
            $str = urlencode($value['Name']);
            echo "<p><a class='btn btn-primary' href=Test.php?test=$str>".$value['Name']."</a></p>";
        }
        ?>
    </body>
</html>
