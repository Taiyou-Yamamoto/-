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
        <h1>会員編集  会員ID:{{$member->id}}</h1>
        
        <form action="{{ url('member/'.$member->id)}}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="name" id="user-name" value="{{ $member->name }}"><br>
            <input type="tel" name="tel" id="user-tel" value="{{ $member->tel }}"><br>
            <input type="text" name="email" id="user-email" value="{{ $member->email }}"><br>
            <button type=submit>編集</button>
        </form>

        <form action="{{ url('member/'.$member->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type=submit>削除</button>
        </form>

    </div>

</body>
</html>