<?php
    session_start();

    include_once "DataBaseFunctions.php";

    $testName = $_GET['test'];

    $arrayTestInfo = selectFromTableByKey("*", "test_info", "Name", $testName);

    $id = $arrayTestInfo[0]['Id'];
    $name = $arrayTestInfo[0]['Name'];
    $question_num = $arrayTestInfo[0]['Question_num'];
    $description = $arrayTestInfo[0]['Description'];

    $currentSessionTests = selectFromTable("*", "session_activity");

    foreach ($currentSessionTests as $value){
        if (session_id() == $value['SessionId'] && $id == $value['TestId']){
            $_SESSION['test_id'] = $id;
            $_SESSION['resultKey'] = $value['TestResult'];
            header("Location: Result1.php");
            die;
        }
    }
?>
<html>
    <head>
        <title><?=$name?></title>
    </head>
    <body>
        <h1 align="center"><?=$name?></h1>
        <p><?=$description?></p>
        <p>Количество вопросов: <b><?=$question_num?></b></p>
        <form action="PrepareTest.php" method="post">
            <input type="hidden" name="id" value="<?=$id?>">
            <input type="hidden" name="quest_num" value="<?=$question_num?>">
            <input type="submit" class="btn btn-primary" value="Начать тест">
        </form>
        <a href="index.php" class="btn btn-primary">На главную</a>
    </body>
</html>
