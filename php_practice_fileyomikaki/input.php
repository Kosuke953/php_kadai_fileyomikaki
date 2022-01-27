<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="hero-image">
            
        </div>
        <div class="title">
            <h1>アンケートにご協力をお願いいたします。</h1>
            <p>所要時間は◯分です。</p>
        </div>
    </header>
    <main>
        <form method="POST" action="fwrite.php">
            <dl>
                <dt>お名前</dt>
                <dd><input type="text" name="name" placeholder="お名前"></dd>
                <dt>性別</dt>
                <dd><input type="radio" name="gender" value="女性">女性</dd>
                <dd><input type="radio" name="gender" value="男性">男性</dd>
                <dt>年齢</dt>
                <dd><input type="radio" name="age" value="10代">10代</dd>
                <dd><input type="radio" name="age" value="20代">20代</dd>
                <dd><input type="radio" name="age" value="30代">30代</dd>
                <dd><input type="radio" name="age" value="40代">40代</dd>
                <dd><input type="radio" name="age" value="50代">50代</dd>
                <dt>イベントを知ったきっかけ</dt>
                <dd><input type="radio" name="find_event" value="SNS">SNS</dd>
                <dd><input type="radio" name="find_event" value="インターネット">インターネット</dd>
                <dd><input type="radio" name="find_event" value="新聞">新聞</dd>
                <dd><input type="radio" name="find_event" value="友人からの紹介">友人からの紹介</dd>
                <dd><input type="radio" name="find_event" value="その他">その他</dd>
            </dl>
            <input type="submit" value="回答する">
        </form>
    </main>
</body>
</html>