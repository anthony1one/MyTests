<?php
session_start();

include_once "DataBaseFunctions.php";

$resultKey = $_POST['resultKey'];
saveSessionTest(session_id(), $_SESSION['test_id'], $resultKey);

unset($_SESSION['test_id']);
unset($_SESSION['questions']);
unset($_SESSION['answers']);
unset($_SESSION['currentNum']);
unset($_SESSION['question_num']);

header("Location: index.php");
die;