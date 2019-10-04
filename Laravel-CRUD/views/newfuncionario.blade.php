@extends('layout.app')

@section('conteudo')
    <div class="row" style="margin:100px 400px;">

        <form method="post" action="/cadastrar">
           {{ csrf_field() }}

            <div class="form-group row">
              <label for="text" class="col-sm-4">Login:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="text" placeholder="Login" name="nome">
              </div>
            </div>
            <div class="form-group row">
              <label for="password" class="col-sm-4">Password:</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="password" placeholder="Password" name="Password">
              </div>
            </div>
            <div class="form-group row">
                <label for="status" class="col-sm-4">Status:</label>
                <div class="col-sm-10">
                    <select class="form-control" id="status" name="select">
                        <option>estagiario</option>
                        <option>fucionario</option>
                        <option>chefe</option>
                        
                    </select>
                </div>
              </div>
           
            <div>
                <input type="submit" class="btn btn-primary" value="Enviar">
            </div>
        </form>
    </div>
@endsection