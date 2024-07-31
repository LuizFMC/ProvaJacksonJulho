<?php

namespace App\Http\Controllers;

use App\Models\Dieta;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class DietaController extends Controller
{
    public function index()
    {
        //app/http/Controller
        $dados = Dieta::all();

        // dd($dados);

        return view("dieta.list", ["dados" => $dados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dietas = Dieta::all();

        return view("dieta.form",['dieta'=>$dietas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //app/http/Controller

        $request->validate([
            'nome' => "required",
            'cafe' => "required",
            'lanche1' => "required",
            'almoco' => "required",
            'lanche2' => "required",
            'janta' => "required",
            'ceia' => "required",
        ], [
            'cafe.required' => "O :attribute é obrigatório",
            'almoco.required' => "O :attribute é obrigatório",
            'janta.required' => "O :attribute é obrigatório",
        ]);

        Dieta::create(
            [
                'nome' => $request->nome,
                'cafe' => $request->cafe,
                'lanche1' => $request->lanche1,
                'almoco' => $request->almoco,
                'lanche2' => $request->lanche2,
                'janta' => $request->janta,
                'ceia' => $request->ceia,
            ]
        );
        return redirect('dieta');
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
        $dado = Dieta::findOrFail($id);

        $dietas = Dieta::all();

        return view("dieta.form", [
            'dado' => $dado,
            'dieta'=> $dietas
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
            'cafe' => "required",
            'lanche1' => "nullable",
            'almoco' => "required",
            'lanche2' => "nullable",
            'janta' => "required",
            'ceia' => "nullable",
        ], [
            'cafe.required' => "O :attribute é obrigatório",
            'almoco.required' => "O :attribute é obrigatório",
            'janta.required' => "O :attribute é obrigatório",
        ]);

        Dieta::updateOrCreate(
            ['id' => $request->id],
            [
                'nome' => $request->nome,
                'cafe' => $request->cafe,
                'lanche1' => $request->lanche1,
                'almoco' => $request->almoco,
                'lanche2' => $request->lanche2,
                'janta' => $request->janta,
                'ceia' => $request->ceia,
            ]
        );

        return redirect('dieta');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dado = Dieta::findOrFail($id);
        // dd($dado);
        $dado->delete();

        return redirect('dieta');
    }

    public function search(Request $request)
    {
        if (!empty($request->nome)) {
            $dados = Dieta::where(
                "nome",
                "like",
                "%" . $request->nome . "%"
            )->get();
        } else {
            $dados = Dieta::all();
        }
        // dd($dados);

        return view("dieta.list", ["dados" => $dados]);
    }

    public function report()
    {
        $dietas = Dieta::All();

        $data = [
            'titulo' => 'Relatório Dietas2',
            'dietas'=> $dietas,
        ];

        $pdf = PDF::loadView('dieta.report', $data);

        return $pdf->download('relatorio_dietas.pdf');
    }

    
}
