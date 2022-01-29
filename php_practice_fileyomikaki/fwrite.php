<?php
    // 取得したデータを変数に変換
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $find_HelloWorld = $_POST["find_HelloWorld"];
    $access_frequency = $_POST["access_frequency"];
    $playtime = $_POST["playtime"];
    $device = $_POST["device"];
    $BillionSystem = $_POST["BillionSystem"];
    $event = $_POST["event"];
    $review = $_POST["review"];

    // 取得したデータを配列に変換
    $answer =
    $age //項目0
    .",".$gender //項目1
    .",".$find_HelloWorld //項目2
    .",".$access_frequency //項目3
    .",".$playtime //項目4
    .",".$device //項目5
    .",".$BillionSystem //項目6
    .",".$event //項目7
    .",".$review //項目8
    ;
    //配列に情報が入っているか確認。
    var_dump($answer);

    // 書き込む先のテキストファイルの名前
    $filename = "questionnaire.csv";

    // ファイル書き込み操作
    file_put_contents($filename, $answer.PHP_EOL, FILE_APPEND | LOCK_EX);

    // $fp = fopen($filename, "a");
    // fwrite($fp, var_export($answer, true));
    // fclose($fp);
?>