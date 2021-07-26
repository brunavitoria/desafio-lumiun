<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index() {
        $livros = Livro::get();
        return view('livros.index', compact('livros'));
    }
    public function create() {
        return view('livros.create');
    }
    public function store(Request $request) {
        Livro::create($request->all());
        return redirect()->route('livros.index')->with('success', 'Criado com Sucesso!');
    }
    public function show($id) {
        $livro = Livro::find($id);
        return view('livros.show', compact('livro'));
    }
    public function edit(Livro $livro) {
        return view('livros.edit', compact('livro'));
    }
    public function update(Request $request, Livro $livro)
    {
        $livro->update($request->all());
        return redirect()->route('livros.index')->with('success', 'Salvo com Sucesso!');
    }
    public function destroy(Livro $livro)
    {
        $livro->delete();
        return back()->with('success', 'Removido com Sucesso!');
    }
}
