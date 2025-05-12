@extends('layouts.app')

@section('title', 'Cadastrar Autor')

@section('content')
    <h1>Cadastrar Autor</h1>
    <form action="{{ route('autores.store') }}" method="POST">
        @csrf
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>URL da Foto:</label><br>
        <input type="text" name="foto_url"><br><br>

        <label>Biografia:</label><br>
        <textarea name="biografia" rows="4"></textarea><br><br>

        <button type="submit">Salvar Autor</button>
    </form>
@endsection
