<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My Todo</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <h3 class="title">Todoリスト 入力ページ</h3>
        <form action="/todos" method="POST">
            @csrf
            <div class="input-title">
                <p>タイトル</p>
                <input type="text" name="todo_title" placeholder="例)◯日のタスク" required>
            </div>
            <button type="submit">送信</button>
        </form>

        <h5>Todo List</h5>
        <ul>
            @foreach ($todos as $key => $todo)
                <li class="todo_list">
                    <p class="todo_comment">
                        {{ $todo[ "comment" ] }}
                    </p>
                    <form action="/todos/{{ $todo[ "id" ] }}"
                          style="display: inline;"
                          method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">DEL</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </body>
</html>
