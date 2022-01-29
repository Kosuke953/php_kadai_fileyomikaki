<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート画面</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="title">
            <h1>アンケートにご協力をお願いいたします。</h1>
            <p>所要時間は５分です。</p>
        </div>
    </header>
    <main>
        <form method="POST" action="fwrite.php">
            <dl>

                <dt>Q1. 性別</dt>
                <dd><input type="radio" name="age" value="男性">男性</dd>
                <dd><input type="radio" name="age" value="女性">女性</dd>

                <dt>Q2. 年齢</dt>
                <dd><input type="radio" name="gender" value="20歳未満">20歳未満</dd>
                <dd><input type="radio" name="gender" value="20歳以上 30歳未満">20歳以上 30歳未満</dd>
                <dd><input type="radio" name="gender" value="30歳以上 40歳未満">30歳以上 40歳未満</dd>
                <dd><input type="radio" name="gender" value="40歳以上 50歳未満">40歳以上 50歳未満</dd>
                <dd><input type="radio" name="gender" value="50歳以上 60歳未満">50歳以上 60歳未満</dd>
                <dd><input type="radio" name="gender" value="60歳以上">60歳以上</dd>

                <dt>Q3. あなたは、どのように Hello World を知りましたか。</dt>
                <dd><input type="radio" name="find_HelloWorld" value="ラジオ">ラジオ</dd>
                <dd><input type="radio" name="find_HelloWorld" value="テレビ">テレビ</dd>
                <dd><input type="radio" name="find_HelloWorld" value="雑誌">雑誌</dd>
                <dd><input type="radio" name="find_HelloWorld" value="当社のホームページ">当社のホームページ</dd>
                <dd><input type="radio" name="find_HelloWorld" value="検索エンジン">検索エンジン</dd>
                <dd><input type="radio" name="find_HelloWorld" value="SNS・ブログ">SNS・ブログ</dd>
                <dd><input type="radio" name="find_HelloWorld" value="家族・友人・知人">家族・友人・知人</dd>
                <dd><input type="radio" name="find_HelloWorld" value="その他">その他<input type="text" name="find" placeholder="ご自由に入力ください。"></dd>
                
                <dt>Q4.  Hello World にどのくらいの頻度でアクセスしていますか。</dt>
                <dd><input type="radio" name="access_frequency" value="週１回">週１回</dd>
                <dd><input type="radio" name="access_frequency" value="週２回">週２回</dd>
                <dd><input type="radio" name="access_frequency" value="週３回">週３回</dd>
                <dd><input type="radio" name="access_frequency" value="週４回">週４回</dd>
                <dd><input type="radio" name="access_frequency" value="週５回">週５回</dd>
                <dd><input type="radio" name="access_frequency" value="週６回">週６回</dd>
                <dd><input type="radio" name="access_frequency" value="毎日">毎日</dd>

                <dt>Q5.  Hello World について、１日どのくらいプレイしていますか。</dt>
                <dd><input type="radio" name="playtime" value="１時間未満">１時間未満</dd>
                <dd><input type="radio" name="playtime" value="１時間以上２時間未満">１時間以上２時間未満</dd>
                <dd><input type="radio" name="playtime" value="２時間以上３時間未満">２時間以上３時間未満</dd>
                <dd><input type="radio" name="playtime" value="３時間以上４時間未満">３時間以上４時間未満</dd>
                <dd><input type="radio" name="playtime" value="４時間以上">４時間以上</dd>

                <dt>Q6. 利用しているデバイスはどれですか。</dt>
                <dd><input type="radio" name="device" value="Android">Android</dd>
                <dd><input type="radio" name="device" value="iPhone">iPhone</dd>
                <dd><input type="radio" name="device" value="Android tablet">Android tablet</dd>
                <dd><input type="radio" name="device" value="iPad">iPad</dd>
                <dd><input type="radio" name="device" value="PC">PC</dd>
                <dd><input type="radio" name="device" value="その他">その他</dd>

                <dt>Q7. １ヶ月の課金額は平均でどのくらいでしょうか。</dt>
                <dd><input type="radio" name="BillionSystem" value="500円未満">500円未満</dd>
                <dd><input type="radio" name="BillionSystem" value="500円以上 1000円未満">500円以上 1000円未満</dd>
                <dd><input type="radio" name="BillionSystem" value="1000円以上 5000円未満">1000円以上 5000円未満</dd>
                <dd><input type="radio" name="BillionSystem" value="5000円以上 10000円未満">5000円以上 10000円未満</dd>
                <dd><input type="radio" name="BillionSystem" value="10000円以上">10000円以上</dd>

                <dt>Q8.  Hello World であったらいいイベントは？</dt>
                <textarea name="event" cols="30" rows="10"></textarea>
                
                <dt>Q9.  Hello World に対してご意見・ご要望がございましたら、ご自由にお書きください。</dt>
                <textarea name="review" cols="30" rows="10"></textarea>

            </dl>
            <input type="submit" value="回答する">
        </form>
    </main>
</body>
</html>