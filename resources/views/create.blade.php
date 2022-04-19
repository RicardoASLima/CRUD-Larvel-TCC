@extends('templates.templates')

@section('content')

    <h1 class="text-center">@if(isset($book)) Editar o livro @else Adicionar um novo livro @endif</h1>

    <div class="col-8 m-auto">


        @if(isset($errors) && count($errors) > 0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach($errors->all() as $error)
                    {{$errors}}<br>
                @endforeach
            </div>
        @endif

        @if(isset($book))
            <form name="formEdit" id="formEdit" method="post" action="{{url("books/$book->id/edit")}}">
                @method('PUT')
        @else
            <form name="formCad" id="formCad" method="post" action="{{url('books/create')}}">
        @endif

            @csrf
            <input class="form-control" type="text" name="title" id="title" placeholder="Título" value="{{$book->title ?? ''}}" required><br>
            <select class="form-control" name="id_user" id="id_user">
                <option value="{{$book->relUsers->id ?? ''}}">{{$book->relUsers->name ?? 'Quem leu'}}</option>
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select><br>
            <input class="form-control" type="text" name="pages" id="pages" placeholder="Paginas" value="{{$book->pages ?? ''}}" required><br>
            <input class="form-control" type="text" name="price" id="price" placeholder="Preços" value="{{$book->price ?? ''}}"><br>

            <input class="btn btn-primary" type="submit" value="@if(isset($book)) Editar @else Adicionar @endif">
        </form>
    </div>

@endsection
