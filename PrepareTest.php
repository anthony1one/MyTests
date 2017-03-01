<?php
session_start();

include_once "CommonFunctions.php";

$id = $_POST['id'];
$question_num = $_POST['quest_num'];

$arrayTest = arrayWithFullTest($id);

//print_r($arrayTest);
//die;

$_SESSION['test_id'] = $id;
$_SESSION['questions'] = $arrayTest;
//$_SESSION['answers'] = array();
$_SESSION['currentNum'] = 0;
$_SESSION['question_num'] = $question_num;
$_SESSION['answerValues'] = 0;

header("Location: RunTest.php");