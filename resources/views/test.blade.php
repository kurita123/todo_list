<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>todo</title>
    </head>
    <body>
        <div class="bg-purple-500 ring-purple-200 ring-4 w-1/5 m-auto rounded-md text-white text-center mt-2 py-3 px-2 text-4xl font-sans">My TODO</div>
        <div class="w-3/5 flex mt-5 m-auto">
            <input type="text" name="hoge" placeholder="TODOを入力する" class="flex-auto w-32 py-2 px-2 rounded-md border-blue-500 hover:border-blue-700 ring-2 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500" />
            <button class="w-32 ml-5 py-2 shadow-md rounded-md font-semibold text-white text-base bg-blue-500 hover:bg-blue-700 ring-2">登録</button>
        </div>
        <ul class="w-4/5 mt-5 m-auto">
            <li class="block py-3 border-b-2 border-gray-200">todo1</li>
            <li class="block py-3 border-b-2 border-gray-200">todo2</li>
            <li class="block py-3 border-b-2 border-gray-200">todo3</li>
        </ul>
    </body>
</html>
