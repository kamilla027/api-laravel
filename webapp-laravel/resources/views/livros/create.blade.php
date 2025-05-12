@extends('layouts.app')

@section('title', 'Cadastrar Livro')

@section('content')
    <h1>Adicionar Novo Livro</h1>
    <form action="{{ route('livros.store') }}" method="POST">
        @csrf
        <label>Título:</label><br>
        <input type="text" name="titulo" required><br><br>

        <label>Gênero:</label><br>
        <input type="text" name="genero" required><br><br>

        <label>URL da Capa:</label><br>
        <input type="text" name="capa_url"><br><br>

        <label>Autor:</label><br>
        <select name="autor_id" required>
            <option value="">Selecione</option>
            @foreach ($autores as $autor)
                <option value="{{ $autor->id }}">{{ $autor->nome }}</option>
            @endforeach
        </select><br><br>

        <button type="submit">Salvar</button>
    </form>
@endsection
