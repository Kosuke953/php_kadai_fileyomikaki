<?php

$filename = "questionnaire.txt";
//questionnaire.txtからデータを取り出す。
$data_jsonencode = file_get_contents($filename);
//JSON decodeして元のデータに戻す。
$questionnaire_result = json_decode(stripslashes($data_jsonencode),true);
//結果を表示する
var_dump($questionnaire_result);
// echo json_last_error();
// echo json_last_error_msg();

?>