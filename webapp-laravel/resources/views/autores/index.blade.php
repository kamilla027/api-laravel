@extends('layouts.app')

@section('title', 'Autores')

@section('content')
    <h1>Lista de Autores</h1>
    <a href="{{ route('autores.create') }}">+ Novo Autor</a><br><br>
    @if (session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif
    @foreach ($autores as $autor)
        <div class="livro">
            <h2>{{ $autor->nome }}</h2>
            @if ($autor->foto_url)
                <img src="{{ $autor->foto_url }}" width="100"><br>
            @endif
            <p>{{ $autor->biografia }}</p>
            <a href="{{ route('autores.edit', $autor->id) }}">Editar</a> |
            <form action="{{ route('autores.destroy', $autor->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Excluir este autor?')">Excluir</button>
            </form>
        </div>
    @endforeach
@endsection
