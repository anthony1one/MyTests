<?php
session_start();

include_once "DataBaseFunctions.php";

$id = $_SESSION['test_id'];

unset($_SESSION['test_id']);
unset($_SESSION['resultKey']);

deleteTestSessionFromTable(session_id(), $id);

$str = selectFromTableByKey("Name", "test_info", "Id", $id, 1);

$name = urlencode($str[0]['Name']);

header("Location: Test.php?test=$name");
die;
