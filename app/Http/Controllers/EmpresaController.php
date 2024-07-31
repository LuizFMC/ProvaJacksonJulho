<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Empresa::all();
        return view("empresa.list", ["dados" => $dados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("empresa.form", ['empresa' => Empresa::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => "required",
            'endereco' => "required",
            'telefone' => "required",
            'imagem' => "nullable|image|mimes:png,jpeg,jpg",
        ], [
            'nome.required' => "O :attribute é obrigatório",
            'endereco.required' => "O :attribute é obrigatório",
            'telefone.required' => "O :attribute é obrigatório",
            'imagem.image' => "Deve ser enviada uma imagem",
            'imagem.mimes' => "A imagem deve ser da extensão PNG, JPEG ou JPG",
        ]);

        $data = $request->all();
        $imagem = $request->file('imagem');

        if ($imagem) {
            $nome_arquivo = date('YmdHis') . "." . $imagem->getClientOriginalExtension();
            $diretorio = "imagem/empresa/";
            $imagem->storeAs($diretorio, $nome_arquivo, 'public');
            $data['imagem'] = $diretorio . $nome_arquivo;
        }

        Empresa::create($data);
        return redirect('empresa');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dado = Empresa::findOrFail($id);
        return view("empresa.form", [
            'dado' => $dado,
            'empresa' => Empresa::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nome' => "required",
            'endereco' => "required",
            'telefone' => "required",
            'imagem' => "nullable|image|mimes:png,jpeg,jpg",
        ], [
            'nome.required' => "O :attribute é obrigatório",
            'endereco.required' => "O :attribute é obrigatório",
            'telefone.required' => "O :attribute é obrigatório",
            'imagem.image' => "Deve ser enviada uma imagem",
            'imagem.mimes' => "A imagem deve ser da extensão PNG, JPEG ou JPG",
        ]);

        $data = $request->all();
        $imagem = $request->file('imagem');

        if ($imagem) {
            $nome_arquivo = date('YmdHis') . "." . $imagem->getClientOriginalExtension();
            $diretorio = "imagem/empresa/";
            $imagem->storeAs($diretorio, $nome_arquivo, 'public');
            $data['imagem'] = $diretorio . $nome_arquivo;
        }

        Empresa::updateOrCreate(
            ['id' => $request->id],
            $data
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dado = Empresa::findOrFail($id);
        $dado->delete();
        return redirect('empresa');
    }

    public function search(Request $request)
    {
        if (!empty($request->nome)) {
            $dados = Empresa::where("nome", "like", "%" . $request->nome . "%")->get();
        } else {
            $dados = Empresa::all();
        }
        return view("empresa.list", ["dados" => $dados]);
    }
}