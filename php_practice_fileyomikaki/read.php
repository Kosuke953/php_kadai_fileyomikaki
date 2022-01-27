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
            <th>名前</th>
            <th>性別</th>
            <th>年齢</th>
            <th>イベントを知ったきっかけ</th>
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
            print_r($arrayCsv);
        ?>
        <?php foreach($arrayCsv as $value){ ?>
        <tr>
            <td><?php echo $value[0] ?></td>
            <td><?php echo $value[1] ?></td>
            <td><?php echo $value[2] ?></td>
            <td><?php echo $value[3] ?></td>
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