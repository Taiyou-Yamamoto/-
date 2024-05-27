<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- 登録ボタン-->
    <header><a href={{ url('login')}}>>>登録</a></header>
    
    <!-- テーブル　-->
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>名前</th>
                    <th>電話番号</th>
                    <th>メールアドレス</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($members as $member)
                <tr>
                    <!--名前-->
                    <td>
                        <div>{{ $member->name }}</div>
                    </td>
                    <!--電話番号-->
                    <td>
                        <div>{{ $member->tel }}</div>
                    </td>
                    <!--メールアドレス-->
                    <td>
                        <div>{{ $member->email }}</div>
                    </td>
                    <!--編集リンク-->
                    <td>
                        <a href={{ url('edit/'.$member->id)}}>>>編集</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>