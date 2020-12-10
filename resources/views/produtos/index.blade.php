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
                <td>Opções</td>
            </tr>
        </thead>
        <tbody>

            @foreach($produtos as $produto)

            <tr>
                <td>{{$produto->codpro}}</td>
                <td>
                    <a href="{{route('editar-produto')}}?codpro={{$produto->codpro}}">
                        {{$produto->nompro}}
                    </a>
                </td>
                <td>{{$produto->estpro}}</td>
                <td>
                
                <form method="post" action="{{route('eliminar-produto')}}?codpro={{$produto->codpro}}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>

                </td>
            </tr>

            @endforeach

        </tbody>
       </table>

      </div>
    </div>

@endsection