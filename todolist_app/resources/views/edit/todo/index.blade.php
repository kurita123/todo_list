<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My Todo</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <h3 class="title">Todoリスト 入力ページ</h3>
        <form action="/edit/todo/register" method="POST">
            @csrf
            <div class="input-title">
                <p>タイトル</p>
                <input type="text" name="title" placeholder="例)◯日のタスク" required>
                <p>コメント</p>
                <input type="text" name="comment" placeholder="例)◯時から会議" required>
            </div>
            <button class="mgTop10" type="submit">送信</button>
        </form>
    </body>
</html>
