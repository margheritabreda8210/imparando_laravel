<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <div class="col-md-12 text-center">
            <h1>Lista dei post</h1>

            <a class="btn btn-info" href='{{ route('posts.create') }}'>CREA NUOVO POST</a><br>

            @foreach ($list as $item)
                <form method="post" action="{{ route('posts.destroy', ['post' => $item]) }}">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-info" type="submit">CANCELLA</button>
                </form>
                {{ $item['title'] }}<br>
                {{ $item['description'] }}<br><br>
            @endforeach
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>

</html>
