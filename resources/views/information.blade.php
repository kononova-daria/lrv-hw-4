<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Information</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        td {
            margin: 0px;
            padding: 3px 6px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
<div class="container">
    <table class="todo-table">
        <thead>
        <tr>
            <td style="min-width: 50px">ID</td>
            <td style="min-width: 150px">Name</td>
            <td style="min-width: 300px">Email</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td style="min-width: 50px">{{ $user->id }}</td>
            <td style="min-width: 150px">{{ $user->name }}</td>
            <td style="min-width: 300px">{{ $user->email }}</td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>
