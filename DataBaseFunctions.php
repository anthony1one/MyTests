<?php
include_once "DataBaseConnection.php";

function dataBaseClose(){
    global $mysqli;
    $mysqli->close();
}

function selectFromTable($vars, $table){
    global $mysqli;
    $array = array();

    $query = "SELECT $vars FROM $table";
    $res = $mysqli->query($query);

    if (!$res){
        echo "($mysqli->errno) $mysqli->error";
        die;
    }

    while ($row = mysqli_fetch_assoc($res))
        $array[] = $row;

    return $array;
}

// typeKey -> 0(string) 1(numeric)
function selectFromTableByKey($vars, $table, $key, $value, $typeKey=0){
    global $mysqli;
    $array = array();

    if ($typeKey == 0)
        $query = "SELECT $vars FROM $table WHERE $key='$value'";
    else
        $query = "SELECT $vars FROM $table WHERE $key=$value";

    $res = $mysqli->query($query);

    if (!$res){
        echo "($mysqli->errno) $mysqli->error";
        die;
    }

    while ($row = mysqli_fetch_assoc($res))
        $array[] = $row;

    return $array;
}

function deleteTestSessionFromTable($session, $id){
    global $mysqli;

    $query = "DELETE FROM session_activity WHERE SessionId='$session'"
        ." AND TestId=$id";

    if (!$mysqli->query($query)){
        echo "($mysqli->errno) $mysqli->error";
        die;
    }
}

function saveSessionTest($session_id, $test_id, $resultKey){
    global $mysqli;

    $query = "INSERT INTO session_activity (SessionId, TestId, TestResult)"
        ." VALUES ('$session_id', $test_id, $resultKey)";

    if (!$mysqli->query($query)){
        echo "($mysqli->errno) $mysqli->error";
        die;
    }
}
