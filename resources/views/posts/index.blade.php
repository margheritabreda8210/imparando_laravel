@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="col-md-12 text-center">
            <h1>Lista dei post</h1>

            <a class="btn btn-info" href='{{ route('posts.create') }}'>CREA NUOVO POST</a><br>

            @foreach ($list as $item)
                @livewire('post', ['post' => $item])
            @endforeach

        </div>
    </div>
@endsection
