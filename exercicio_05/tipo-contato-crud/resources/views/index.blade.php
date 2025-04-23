@extends('layouts.app')

@section('content')
    <h1>Tipos de Contato</h1>
    <a href="{{ route('tipo_contato.create') }}">Adicionar Tipo de Contato</a>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tiposContato as $tipoContato)
                <tr>
                    <td>{{ $tipoContato->nome }}</td>
                    <td>{{ $tipoContato->descricao }}</td>
                    <td>
                        <a href="{{ route('tipo_contato.edit', $tipoContato->id) }}">Editar</a>
                        <form action="{{ route('tipo_contato.destroy', $tipoContato->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
