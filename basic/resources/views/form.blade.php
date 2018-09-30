<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/post" method="post">
        {{ csrf_field() }}
        <div>title :<input type="text" name="title"></div>
        <div>body: <input type="text" name="body"></div>
        <button type="submit">kirim</button>
    </form>
</body>
</html>
