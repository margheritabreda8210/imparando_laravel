@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <form action="{{ route('posts.store') }}" method="post">
                    @csrf
                    <label for="titolo" class="form-label">Titolo</label>
                    <input type="text" class="form-control" name="title" id="titolo" size="30">
                    <label for="descrizione" class="form-label">Descrizione</label>
                    <textarea name="description" class="form-control" id="descrizione" rows="10" cols="30"></textarea>
                    <input type="submit" class="btn btn-danger" value="Invia">
                </form>
            </div>
        </div>
    </div>
@endsection
