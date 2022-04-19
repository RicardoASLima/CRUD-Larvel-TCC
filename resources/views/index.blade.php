@extends('templates.templates')

@section('content')
    <h1 class="text-center">Seus Livros</h1>

    <div class="text-center mt-3 mb-4">
        <a href="{{url("books/create")}}">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>

    <div class="col-8 m-auto">
        @csrf
        <table class="table text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Paginas</th>
                    <th scope="col">Preço</th>
                </tr>
            </thead>
            <tbody>
                @foreach($book as $books)
                    <tr>
                        <th scope="row">{{$books->id}}</th>
                        <td>{{$books->title}}</td>
                        <td>{{$books->pages}}</td>
                        <td>{{$books->price}}</td>
                        <td>
                            <a href="{{url("books/$books->id")}}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                        </td>
                        <td>
                            <a href="{{url("books/$books->id/edit")}}">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                        </td>
                        <td>
                            <a href="{{url("books/$books->id/delete")}}" class="js-del">
                                <button class="btn btn-danger">Deletar</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <th scope="row">Total</th>
                    <td></td>
                    <td><b>{{$totalPages}}</b></td>
                    <td><b>{{$totalPrice}}</b></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
