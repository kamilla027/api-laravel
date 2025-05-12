<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @vite('resources/css/style.css')
    <style>
        nav {
            background: #2c3e50;
            padding: 15px;
            text-align: center;
        }
        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0 20px 40px;
        }
        h1 {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">🏠 Início</a>
        <a href="{{ route('livros.index') }}">📚 Livros</a>
        <a href="{{ route('autores.index') }}">👤 Autores</a>
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>