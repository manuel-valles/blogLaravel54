<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog-Laravel</title>
</head>
<body>
    <h1>Hello <?= $name;?></h1>
    <ul>
        @foreach($tasks as $task)
            <li> {{ $task }}</li>
        @endforeach
    </ul>
</body>
</html>