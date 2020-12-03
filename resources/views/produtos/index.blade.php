@extends('layouts.padrao')

@section('titulo', 'Lista de produtos')

@section('conteudo')

    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-12">
      
       <table class="table table-striped">
        <thead>
            <tr>
                <td>Código</td>
                <td>Nome</td>
                <td>Estoque</td>
            </tr>
        </thead>
        <tbody>

            @foreach($produtos as $produto)

            <tr>
                <td>{{$produto->codpro}}</td>
                <td>{{$produto->nompro}}</td>
                <td>{{$produto->estpro}}</td>
            </tr>

            @endforeach

        </tbody>
       </table>

      </div>
    </div>

@endsection