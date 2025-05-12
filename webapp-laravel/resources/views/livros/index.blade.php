@extends('layouts.app')

@section('title', 'Catálogo de Livros')

@section('content')
    <h1>📚 Catálogo de Livros</h1>
    <a href="{{ route('livros.create') }}">+ Novo Livro</a><br><br>
    @if (session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif
    @foreach ($livros as $livro)
        <div class="livro">
            <img src="{{ $livro->capa_url }}" alt="Capa do livro">
            <div class="livro-info">
                <h2>{{ $livro->titulo }} ({{ $livro->genero }})</h2>
                <p><strong>Autor:</strong> {{ $livro->autor->nome ?? 'Sem autor' }}</p>
                <a href="{{ route('livros.edit', $livro->id) }}">Editar</a> |
                <form action="{{ route('livros.destroy', $livro->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Excluir este livro?')">Excluir</button>
                </form>
            </div>
        </div>
    @endforeach
@endsection
