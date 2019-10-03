{{-- está estentendo a pagina app  --}}
@extends('layout.app')

@section('conteudo')
    
@if(count ($dados)==0)
    
   <p class="alert alert-danger text-center">Não foram encontradas noticias</p>
@else

    @foreach ($dados as $noticias)
    
        <div class="row bg-secondary">

        
            <div class="col-md-9">
                <h1 class="text-white">{{$noticias->titulo}}</h1>
            </div>
        
            <div class="col-md-3 text-right">
               <h5 class="text-white"> {{$noticias->autor}} | {{$noticias->updated_at}}</h5>
              
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                {{$noticias->texto}}
            </div>
        </div>
        <hr>
    @endforeach

@endif

    


@endsection