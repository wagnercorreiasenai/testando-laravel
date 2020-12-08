@extends('layouts.padrao')

@section('titulo', 'Cadastrar produto')

@section('conteudo')

    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-12">

        <form name="add" id="add" method="post" action="{{route('salvar-produto')}}">

            @csrf

            <div class="form-group">
                <label for="nompro" class="form-label">Nome do produto</label>
                <input class="form-control" type="text" id="nompro" name="nompro"/>
            </div>

            <div class="form-group">
                <label for="estpro" class="form-label">Estoque do produto</label>
                <input class="form-control" type="number" id="estpro" name="estpro"/>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>

        </form>

      </div>
    </div>

@endsection