<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="col-md-8">
    <form action="{{route('create.post')}}" method="POST">
        @csrf
        content : <textarea name="content" id="" cols="30" rows="10"></textarea>
        <input type="number" name="user_id" value="{{auth()->user()->id}}" hidden>
        <input type="submit"><br>
    </form>
</div>
</body>
</html>
