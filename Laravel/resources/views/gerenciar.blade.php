@extends('layout.app')

@section('conteudo')
    

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Codigo</th>
        <th scope="col">Titulo</th>
        <th scope="col">Autor</th>
        <th scope="col">Visivel</th>
        <th scope="col">Editar</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>

        @if (count ($dados)==0)
        
        <p class="alert alert-danger text-center">Não foram encontradas noticias</p>

        @else
            
        @foreach ($dados as $noticias)
        <tr>
        <th scope="col">{{$noticias->id_noticia}}</th>
        <th scope="col">{{$noticias->titulo}}</th>
        <th scope="col">{{$noticias->autor}}</th>
        <th scope="col">{{$noticias->visivel}}</th>
        <th scope="col"><a href="editar/{{$noticias->id_noticia}}" class="btn btn-primary">Iditar</a></th>
        <th scope="col"><a href="excluir/{{$noticias->id_noticia}}" class="btn btn-danger">Excluir</a></th>
        </tr>
        
        @endforeach
        @endif

    </tbody>
  </table>
  



@endsection