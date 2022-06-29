<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My Todo</title>
    </head>
    <body>
        <h3 class="title">My Todo</h3>
        <form action="/todos" method="POST">
            @csrf
            <input name="text" placeholder="Input here...">
            <button type="submit">ADD</button>
        </form>

        <h5>Todo List</h5>
        <ul>
            @foreach ($todos as $todo)
                <li>
                    {{ $todo[ "comment" ] }}
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
