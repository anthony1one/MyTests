<?php
session_start();

include_once "DataBaseFunctions.php";

//echo session_id();

$array_name_tests = selectFromTable("Name", "test_info")
?>

<html>
    <head>
        <title>Тесты</title>
    </head>
    <body>
        <div class="headline">
            <h1 align="center">Выберите Тест</h1>
        </div>
        <div class="test-list">
            <?php
            foreach ($array_name_tests as $value) {
                $str = urlencode($value['Name']);
                $value_name = $value['Name'];
                echo "<input type='button' onclick=\"location.href='Test.php?test=$str'\" value='$value_name'/>";
            }
            ?>
        </div>
        <div class="create-del-tests">
            <input type='button' onclick="location.href='NewTest.php'" value='Добавить тест'/>
            <input type='button' onclick="location.href='DeleteTest.php'" value='Удалить тест'/>
        </div>
    </body>
</html>
