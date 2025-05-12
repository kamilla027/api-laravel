@extends('layouts.app')

@section('title', 'Editar Autor')

@section('content')
    <h1>Editar Autor</h1>
    <form action="{{ route('autores.update', $autor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nome:</label><br>
        <input type="text" name="nome" value="{{ $autor->nome }}" required><br><br>

        <label>URL da Foto:</label><br>
        <input type="text" name="foto_url" value="{{ $autor->foto_url }}"><br><br>

        <label>Biografia:</label><br>
        <textarea name="biografia" rows="4">{{ $autor->biografia }}</textarea><br><br>

        <button type="submit">Atualizar</button>
    </form>
@endsection