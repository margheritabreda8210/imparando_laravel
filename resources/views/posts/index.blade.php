<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1>Lista dei post</h1>
   <button>
    <a href='{{route('posts.create')}}'>CREA NUOVO POST</a></button><br>
    @foreach ($list as $item)
    {{$item['title']}}<br>
    {{$item['description']}}<br><br>
        
    @endforeach
</body>
</html>
