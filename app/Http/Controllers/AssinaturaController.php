<?php

namespace App\Http\Controllers;

use App\Models\assinatura;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class AssinaturaController extends Controller
{
    public function index()
    {
        //app/http/Controller
        $dados = Assinatura::all();

        // dd($dados);

        return view("assinatura.list", ["dados" => $dados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $assinaturas = Assinatura::all();

        return view("assinatura.form",['assinatura'=>$assinaturas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //app/http/Controller

        $request->validate([
            'nome' => "required",
            'preco' => "required",
            'duracao' => "required",
        ], [
            'nome.required' => "O :attribute é obrigatório",
            'preco.required' => "O :attribute é obrigatório",
            'duracao.required' => "O :attribute é obrigatório",
        ]);

        Assinatura::create(
            [
                'nome' => $request->nome,
                'preco' => $request->preco,
                'duracao' => $request->duracao,
            ]
        );
        return redirect('assinatura');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dado = Assinatura::findOrFail($id);

        $assinaturas = Assinatura::all();

        return view("assinatura.form", [
            'dado' => $dado,
            'assinatura'=> $assinaturas
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //app/http/Controller

        $request->validate([
            'nome' => "required",
            'preco' => "required",
            'duracao' => "required",
        ], [
            'nome.required' => "O :attribute é obrigatório",
            'preco.required' => "O :attribute é obrigatório",
            'duracao.required' => "O :attribute é obrigatório",
        ]);

        Assinatura::updateOrCreate(
            ['id' => $request->id],
            [
                'nome' => $request->nome,
                'preco' => $request->preco,
                'duracao' => $request->duracao,
            ]
        );

        return redirect('assinatura');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dado = Assinatura::findOrFail($id);
        // dd($dado);
        $dado->delete();

        return redirect('assinatura');
    }

    public function search(Request $request)
    {
        if (!empty($request->nome)) {
            $dados = Assinatura::where(
                "nome",
                "like",
                "%" . $request->nome . "%"
            )->get();
        } else {
            $dados = Assinatura::all();
        }
        // dd($dados);

        return view("assinatura.list", ["dados" => $dados]);
    }

    
}
