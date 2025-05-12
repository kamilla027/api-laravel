<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use App\Models\Autor;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index()
    {
        $livros = Livro::with('autor')->get();
        return view('livros.index', compact('livros'));
    }

    public function create()
    {
        $autores = Autor::all();
        return view('livros.create', compact('autores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'genero' => 'required|string|max:100',
            'capa_url' => 'nullable|string',
            'autor_id' => 'required|exists:autores,id',
        ]);

        Livro::create($request->all());

        return redirect()->route('livros.index')->with('success', 'Livro cadastrado com sucesso!');
    }

    public function edit(Livro $livro)
    {
        $autores = Autor::all();
        return view('livros.edit', compact('livro', 'autores'));
    }

    public function update(Request $request, Livro $livro)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'genero' => 'required|string|max:100',
            'capa_url' => 'nullable|string',
            'autor_id' => 'required|exists:autores,id',
        ]);

        $livro->update($request->all());

        return redirect()->route('livros.index')->with('success', 'Livro atualizado com sucesso!');
    }

    public function destroy(Livro $livro)
    {
        $livro->delete();
        return redirect()->route('livros.index')->with('success', 'Livro excluído com sucesso!');
    }
}
