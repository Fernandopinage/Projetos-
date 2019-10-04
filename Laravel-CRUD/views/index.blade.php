@extends('layout.app')

@section('conteudo')
<div class="row" style="margin:280px 400px;">
        {{-- tela de login --}}
    
        <form method="POST" action="">
                <div class="form-group row">
                  <label for="text" class="col-sm-4">Login:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="text" placeholder="Password">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="password" class="col-sm-4">Password:</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" placeholder="Password">
                  </div>
                </div>
                <div>
                     <a href="newfuncionario">New usuario</a>
                </div class="form-group row">
                <br>
                <div>
                    <input type="submit" class="btn btn-primary" value="Enviar">
                </div>
        </form>
    
</div>

@endsection

