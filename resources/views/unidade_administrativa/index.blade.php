@extends('layouts.app')

@section('title')
    Unidades Administrativas
@endsection

@section('content')
    <div style="border-block-end: #949494 2px solid; padding-block-end: 5px; margin-block-end: 10px">
        <h2>Unidades Administrativas <a class="btn btn-primary" href="{{ route('unidade_administrativa.create') }}"
            role="button">Cadastrar</a> </h2>

    </div>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Descrição</th>
            
        </tr>
        </thead>

        <tbody>
        @foreach($unidade_administrativas as $unidade_administrativa)
            <tr>
                <td></td>
                <td>{{ $unidade_administrativas->descricao }}</td>
    
                <td>{{ $unidade_administrativas->unidade_administrativa_id }}</td>

                <td>
                    <div class="dropdown">
                        <div>
                            <a class="dropdown-item" href ="{{ route('unidade_administrativa.edit', ['unidade_administrativa_id' => $unidade_administrativas->id]) }}">Editar</a>
                        </div>
                        <div>
                            <a class="dropdown-item" href ="{{ route('unidade_administrativa.delete', ['unidade_administrativa_id' => $unidade_administrativas->id]) }}">Apagar</a>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
