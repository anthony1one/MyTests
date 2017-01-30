<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $answer = $_POST['answer'];
    $_SESSION['answers'][] = $answer;
}

$currentNum = $_SESSION['currentNum'];
$currentNum++;

if ($currentNum > $_SESSION['question_num']){
    header("Location: Result.php");
    die;
}

$questions = $_SESSION['questions'];
$currentQuestion = $questions[$currentNum - 1];

?>

<html>
    <head>
        <title>Вопрос #<?=$currentNum?></title>
        <link rel="stylesheet" href="styles/bootstrap.css">
    </head>
    <body>
        <p><h2>Вопрос <?=$currentNum?> из <?=$_SESSION['question_num']?></h2></p>
        <p><?=$currentQuestion[0]?></p>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <?php
            for ($i = 1; $i < count($currentQuestion); $i++) {
                echo "<p><input type='radio' name='answer' value='$i' required>$currentQuestion[$i]</p>";
            }
            $_SESSION['currentNum'] = $currentNum;
            ?>
            <input type="submit" class="btn btn-primary" value="Дальше">
        </form>
    </body>
</html>
