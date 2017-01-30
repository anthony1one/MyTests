<?php
session_start();

include_once "CommonFunctions.php";

$arr = $_SESSION['answers'];
$id = $_SESSION['test_id'];
$resultKey = findTestResult($arr);
$result = getResultTest($id, $resultKey);
?>

<html>
    <head>
        <title>Результат</title>
        <link rel="stylesheet" href="styles/bootstrap.css">
    </head>
    <body>
        <h1 align="center">Результат</h1>
        <p><?=$result?></p>
        <form action="CleanTempSession.php" method="post">
            <input type="hidden" name="resultKey" value="<?=$resultKey?>">
            <input type="submit" class="btn btn-primary" value="Готово">
        </form>
    </body>
</html>
