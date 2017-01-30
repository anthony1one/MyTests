<?php
function arrayWithFullTest($idTest){
    $strTestQuestions = "test_question_".$idTest.".txt";
    $strTestAnswers = "test_answer_".$idTest.".txt";

    $arr1 = file("TestStore/test_num_id$idTest/$strTestQuestions");
    $arr2 = file("TestStore/test_num_id$idTest/$strTestAnswers");
    $arrFinal = array();

    for ($i = 0; $i < count($arr1); $i++){
        $arrFinal[$i][] = $arr1[$i];
        $arrBufferAnswers = explode("/", $arr2[$i]);
        for ($j = 0; $j < count($arrBufferAnswers); $j++)
        {
            $arrFinal[$i][] = $arrBufferAnswers[$j];
        }
    }

    return $arrFinal;
}

function getResultTest($idTest, $key){
    $strTestResults = "test_result_".$idTest.".txt";

    $arr = file("TestStore/test_num_id$idTest/$strTestResults");
    $arrFinal = explode("///", $arr[0]);

    return $arrFinal[$key - 1];
}

function findTestResult($arr){
    $arrDetails = array();
    $max = 0;
    $maxKey = 0;

    foreach ($arr as $value){
        if (!array_key_exists($value, $arrDetails))
            $arrDetails[$value] = 1;
        else
            $arrDetails[$value] += 1;
    }

    foreach ($arrDetails as $key=>$value){
        if ($max < $value){
            $max = $value;
            $maxKey = $key;
        }
        else continue;
    }

    return $maxKey;
}