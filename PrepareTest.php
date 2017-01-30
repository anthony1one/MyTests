<?php
session_start();

include_once "CommonFunctions.php";

$id = $_POST['id'];
$question_num = $_POST['quest_num'];

$arrayTest = arrayWithFullTest($id);

$_SESSION['test_id'] = $id;
$_SESSION['questions'] = $arrayTest;
$_SESSION['answers'] = array();
$_SESSION['currentNum'] = 0;
$_SESSION['question_num'] = $question_num;

header("Location: RunTest.php");