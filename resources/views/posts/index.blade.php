<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    
</head>

<body>
    <div class="container">

        <div class="col-md-12 text-center">
            <h1>Lista dei post</h1>

            <a class="btn btn-info" href='{{ route('posts.create') }}'>CREA NUOVO POST</a><br>

            @foreach ($list as $item)
                {{--<form method="post" action="{{ route('posts.destroy', ['post' => $item]) }}">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-info" type="submit">CANCELLA</button>
                </form>
                {{ $item['title'] }}<br>
                {{ $item['description'] }}<br><br>--}}

                @livewire('post', ['post' => $item])
            @endforeach

        </div>
    </div>
    
</body>

</html>
