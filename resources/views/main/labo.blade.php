<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>学習環境一覧</title>
</head>
<body>
    <p>一緒に勉強しよう！</p>
    <a href="/">ホームページへ戻る</a>

    <h2>フォーム</h2>
    <form method="post" action="{{ url('/place') }}">
        @csrf
        <input type="text" name="name"><br>
        <textarea name="text"></textarea><br>
        <input type=submit value="送信">
    </form>
    

    @foreach($rooms as $room)
        {{ $room->name }}<br>
        {{ $room->text }}<br>
        <a href="{{ route('RoomCreate', ['id' => $room->id]) }}">予約する</a><br>
    @endforeach
</body>
</html>