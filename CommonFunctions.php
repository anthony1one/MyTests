<?php
function arrayWithFullTest($idTest){
    $strTestQuestions = "test_question_".$idTest.".txt";
    $strTestAnswers = "test_answer_".$idTest.".txt";

    $arr1 = file_get_contents("TestStore/test_num_id$idTest/$strTestQuestions");
    $arr2 = file_get_contents("TestStore/test_num_id$idTest/$strTestAnswers");

    $arr1 = explode("///", $arr1);
    $arr2 = explode("///", $arr2);

//    print_r($arr1);
//    echo "<br>----------------------<br>";
//    print_r($arr2);
//    die;

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

// str[0] - мин балл, str[1] - макс балл, str[2] - текст
function getResultTest($idTest, $key){
    $strTestResults = "test_result_".$idTest.".txt";
    $answer = "";

    $arr = file_get_contents("TestStore/test_num_id$idTest/$strTestResults");

    $arrFinal = explode("///", $arr);

    foreach ($arrFinal as $value){
        $str = explode("/", $value);

        //print_r($str);

        if ($key >= $str[0] && $key <= $str[1]){
            $answer = $str[2];
            return $answer;
        }
    }
    return "Ошибка теста";
}

//function findTestResult($arr){
//    $arrDetails = array();
//    $max = 0;
//    $maxKey = 0;
//
//    foreach ($arr as $value){
//        if (!array_key_exists($value, $arrDetails))
//            $arrDetails[$value] = 1;
//        else
//            $arrDetails[$value] += 1;
//    }
//
//    foreach ($arrDetails as $key=>$value){
//        if ($max < $value){
//            $max = $value;
//            $maxKey = $key;
//        }
//        else continue;
//    }
//
//    return $maxKey;
//}