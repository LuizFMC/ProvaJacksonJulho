<?php

namespace App\Http\Controllers;

use App\Models\Treino;
use Illuminate\Http\Request;
use PDF;
use App\Charts\TreinoChart;




class TreinoController extends Controller
{
    public function index()
    {
        //app/http/Controller
        $dados = Treino::all();

        // dd($dados);

        return view("treino.list", ["dados" => $dados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $treinos = Treino::all();

        return view("treino.form",['treino'=>$treinos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //app/http/Controller

        $request->validate([
            'nome' => "required",
            'tipo' => "nullable",
            'series' => "required",
            'reps' => "required",

        ], [
            'nome.required' => "O :attribute é obrigatório",
            'tipo.required' => "O :attribute é obrigatório",
            'series.required' => "O :attribute é obrigatório",
            'reps.required' => "O :attribute é obrigatório",
        ]);

        Treino::create(
            [
                'nome' => $request->nome,
                'tipo' => $request->tipo,
                'series' => $request->series,
                'reps' => $request->reps,

            ]
        );
        return redirect('treino');
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
        $dado = Treino::findOrFail($id);

        $treinos = Treino::all();

        return view("treino.form", [
            'dado' => $dado,
            'treino'=> $treinos
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
            'tipo' => "required",
            'series' => "required",
            'reps' => "required",

        ], [
            'nome.required' => "O :attribute é obrigatório",
            'tipo.required' => "O :attribute é obrigatório",
            'series.required' => "O :attribute é obrigatório",
            'reps.required' => "O :attribute é obrigatório",
        ]);

        Treino::updateOrCreate(
            ['id' => $request->id],
            [
                'nome' => $request->nome,
                'tipo' => $request->tipo,
                'series' => $request->series,
                'reps' => $request->reps,
            ]
        );

        return redirect('treino');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dado = Treino::findOrFail($id);
        // dd($dado);
        $dado->delete();

        return redirect('treino');
    }

    public function search(Request $request)
    {
        if (!empty($request->nome)) {
            $dados = Treino::where(
                "nome",
                "like",
                "%" . $request->nome . "%"
            )->get();
        } else {
            $dados = Treino::all();
        }
        // dd($dados);

        return view("treino.list", ["dados" => $dados]);
    }

    public function report()
    {
        $treinos = Treino::All();

        $data = [
            'titulo' => 'Relatório Treinos2',
            'treinos'=> $treinos,
        ];

        $pdf = PDF::loadView('treino.report', $data);

        return $pdf->download('relatorio_treinos.pdf');
    }

    public function chart(TreinoChart $TreinoChart)
    { 
        return view("treino.chart", ["TreinoChart" => $TreinoChart->build()]);
    }
    
    

}
