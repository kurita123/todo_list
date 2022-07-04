<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My Todo</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <h3 class="title">Todoリスト</h3>
        <form action="/todos" method="POST">
            @csrf
            <ul>
                @foreach ($todos as $key => $todo)
                    <li class="todo_list" style="">
                        <p>{{ $todo[ "title" ] }}</p>
                        <p class="todo_comment">
                            {{ $todo[ "comment" ] }}
                        </p>
                        <form action="/todos/{{ $todo[ "id" ] }}" style="display: inline;" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">DEL</button>
                        </form>
                    </li>
                @endforeach
            </ul>
            <button type="submit">送信</button>
        </form>
    </body>
</html>
