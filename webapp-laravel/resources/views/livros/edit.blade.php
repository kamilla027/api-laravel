@extends('layouts.app')

@section('title', 'Editar Livro')

@section('content')
    <h1>Editar Livro</h1>
    <form action="{{ route('livros.update', $livro->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Título:</label><br>
        <input type="text" name="titulo" value="{{ $livro->titulo }}" required><br><br>

        <label>Gênero:</label><br>
        <input type="text" name="genero" value="{{ $livro->genero }}" required><br><br>

        <label>URL da Capa:</label><br>
        <input type="text" name="capa_url" value="{{ $livro->capa_url }}"><br><br>

        <label>Autor:</label><br>
        <select name="autor_id" required>
            @foreach ($autores as $autor)
                <option value="{{ $autor->id }}" {{ $livro->autor_id == $autor->id ? 'selected' : '' }}>
                    {{ $autor->nome }}
                </option>
            @endforeach
        </select><br><br>

        <button type="submit">Atualizar</button>
    </form>
@endsection