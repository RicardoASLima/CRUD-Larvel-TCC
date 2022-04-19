@extends('templates.templates')

@section('content')

    <h1 class="text-center">Visualizar</h1>

    <div class="col-8 m-auto">
        Título: {{$book->title}}<br>
        Páginas: {{$book->pages}}<br>
        Preço: {{$book->price}}<br>
    </div>

@endsection
