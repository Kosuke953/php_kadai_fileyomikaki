<?php
    // 取得したデータを変数に変換
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];
    $find_event = $_POST["find_event"];

    // 取得したデータを連想配列に変換
    $answer = array(
        "name"=>"$name",
        "gender"=>"$gender",
        "age"=>"$age",
        "find_event"=>"$find_event"
    );
    //配列に情報が入っているか確認。
    var_dump($answer);

    // 書き込む先のテキストファイルの名前
    $filename = "questionnaire.txt";

    // 取得したデータをJSON化して結果を変数に保存
    $data_jsonencode = json_encode($answer);

    // ファイル書き込み操作
    file_put_contents($filename, $data_jsonencode.PHP_EOL, FILE_APPEND | LOCK_EX);

    // $fp = fopen($filename, "a");
    // fwrite($fp, var_export($answer, true));
    // fclose($fp);
?>