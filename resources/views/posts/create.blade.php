<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('posts.store')}}" method="post">
       @csrf
        <label for="titolo">Titolo</label>
        <input type="text" name="title" id="titolo" size="30">
        <label for="descrizione">Descrizione</label>
        <textarea name="description" id="descrizione" rows="10" cols="30"></textarea>
        <input type="submit" value="Invia">
      </form>
    
</body>
</html>