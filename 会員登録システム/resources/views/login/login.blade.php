<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>会員登録</h1>
        
        <form action="{{ url('member')}}" method="POST">
            @csrf
            <input type="text" name="name" id="user-name" placeholder="名前"><br>
            <input type="tel" name="tel" id="user-tel" placeholder="電話番号"><br>
            <input type="text" name="email" id="user-email" placeholder="メールアドレス"><br>
            <button type=submit>登録</button>
        </form>
    </div>

</body>
</html>