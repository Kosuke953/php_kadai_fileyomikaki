<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" con tent="width=device-width, initial-scale=1.0">
    <title>アンケート集計結果</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>性別</th>
            <th>年齢</th>
            <th>Hello Worldを知ったきっかけ</th>
            <th>アクセス頻度</th>
            <th>１日のプレイ時間</th>
            <th>利用しているデバイス</th>
            <th>課金額Average</th>
            <th>希望イベント</th>
            <th>意見・要望</th>
        </tr>

        <?php
            $filename = "questionnaire.csv";
            $data = file_get_contents($filename);
            // 改行ごとの配列に変換
            $array = explode("\n",$data);
            $arrayCsv = [];
            foreach($array as $key => $value){
                if(!$value)continue;
                $arrayCsv[] = explode(",",$value);
            }
            //確認用
            // print_r($arrayCsv);
        ?>
        <?php foreach($arrayCsv as $value){ ?>
        <tr>
            <td><?php echo $value[0] ?></td>
            <td><?php echo $value[1] ?></td>
            <td><?php echo $value[2] ?></td>
            <td><?php echo $value[3] ?></td>
            <td><?php echo $value[4] ?></td>
            <td><?php echo $value[5] ?></td>
            <td><?php echo $value[6] ?></td>
            <td><?php echo $value[7] ?></td>
            <td><?php echo $value[8] ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>

<!-- <?php


//questionnaire.txtからデータを取り出す。

//JSON decodeして元のデータに戻す。
$data_jsonencode = mb_convert_encoding($data_jsonencode, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
//結果を表示する
$data＿object = json＿decode($data_jsonencode, true);
var_dump($data＿object);
// echo json_last_error();
// echo json_last_error_msg();

?> -->