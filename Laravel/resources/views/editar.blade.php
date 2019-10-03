@extends('layout.app')

@section('conteudo')
    
    <div>

    <form method="POST" action="/update/{{$noticia->id_noticia}}">

            {{csrf_field()}}
            <div class="form-group">
                
                    <label for="titulo">Titulo</label>
            <input class="form-control" type="text" name="titulo" id="titulo" value="{{$noticia->titulo}}">
                
            </div>
           
            <div class="form-group">

                    <label for="autor">Autor</label>
            <input class="form-control" type="text" name="autor" id="autor" value="{{$noticia->autor}}">
    
            </div>    

            <div class="form-group">

                    <label for="texto">Texto</label>
            <textarea class="form-control" type="texto" name="texto" id="texto"  rows="10">{{$noticia->texto}}</textarea>
    
            </div>
            <div class="form-group text-center" >

            <input type="checkbox" name="checkbox_v" checked value="{{$noticia->visivel}}"> Visivel

            </div>

            <div class="form-group" text-right>

                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
        
    </div>

@endsection