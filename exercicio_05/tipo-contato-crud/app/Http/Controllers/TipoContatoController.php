<?php

namespace App\Http\Controllers;

use App\Models\TipoContato;
use Illuminate\Http\Request;

class TipoContatoController extends Controller
{
    // Página inicial (lista de tipos de contato)
    public function index()
    {
        // Recuperar todos os tipos de contato do banco de dados
        $tiposContato = TipoContato::all();
    
        // Passar a variável para a view
        return view('index', compact('tiposContato'));
    }
            

    // Formulário para criar novo tipo de contato
    public function create()
    {
        return view('create');  // Certifique-se que 'create' está correto
    }

    // Salvar novo tipo de contato
    public function store(Request $request)
    {
        TipoContato::create($request->all());
        return redirect()->route('tipo_contato.index');
    }

    // Exibir um tipo de contato
    public function show($id)
    {
        $tipoContato = TipoContato::findOrFail($id);
        return view('show', compact('tipoContato'));  // Certifique-se que 'show' está correto
    }

    // Formulário para editar um tipo de contato
    public function edit($id)
    {
        $tipoContato = TipoContato::findOrFail($id);
        return view('edit', compact('tipoContato'));  // Certifique-se que 'edit' está correto
    }

    // Atualizar tipo de contato
    public function update(Request $request, $id)
    {
        $tipoContato = TipoContato::findOrFail($id);
        $tipoContato->update($request->all());
        return redirect()->route('tipo_contato.index');
    }

    // Excluir tipo de contato
    public function destroy($id)
    {
        $tipoContato = TipoContato::findOrFail($id);
        $tipoContato->delete();
        return redirect()->route('tipo_contato.index');
    }
}
