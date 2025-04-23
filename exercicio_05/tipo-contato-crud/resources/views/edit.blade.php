@extends('layouts.app')

@section('content')
    <h1>Editar Tipo de Contato</h1>
    <form action="{{ route('tipo_contato.update', $tipoContato->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ $tipoContato->nome }}" required>
        
        <label for="descricao">Descrição</label>
        <textarea name="descricao" id="descricao">{{ $tipoContato->descricao }}</textarea>

        <button type="submit">Salvar</button>
    </form>
@endsection
