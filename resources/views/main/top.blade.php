<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/rooms.css') }}">
    <title>ホームページ</title>
</head>
<body>
    <header>
        <div class="option1">
            <p><a href="/profile">プロフィール</a></p>
        </div>
        <div class="option2">
            <p><a href="/labo">学習環境へ</a></p>
        </div>
        <div class="option1">
            <p><a href="/favorite">お気に入り</a></p>
        </div>
        <div class="option2">
            <p><a href="/register">新規登録</a></p>
        </div>
        <div class="option1">
            <p><a href="/login">ログイン</a></p>
        </div>
    </header>
    <div class="top">
        <img class="top-image" src="{{ asset('/images/room.jpeg') }}" alt="top-image">
        <h2 class="top-title">一緒に勉強してみませんか？</h2>
        <p class="top-subtitle"><a href="/labo">学習環境へlet's go!</a></p>
    </div>
</body>
</html>