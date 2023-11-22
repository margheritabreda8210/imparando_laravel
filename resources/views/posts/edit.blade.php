@extends('layouts.app')
@section('content')
    <form action="{{ route('posts.update', ['post' => $post]) }}" method="post">
        @method('PUT')
        @csrf
        <label for="titolo">Titolo</label>
        <input type="text" name="title" size="30" value="{{ $post['title'] }}">
        <label for="descrizione">Descrizione</label>
        <textarea name="description" rows="10" cols="30">{{ $post['description'] }}</textarea>
        <input type="submit" value="Invia">
    </form>
@endsection
