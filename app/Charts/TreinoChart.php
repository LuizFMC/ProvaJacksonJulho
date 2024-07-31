<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;

class TreinoChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
      
        $dados = DB::table('treinos')
            ->select('nome', DB::raw('SUM(series) as total_series'))
            ->groupBy('nome')
            ->get();


            $nomes = $dados->pluck('nome')->toArray(); 
            $totalSeries = $dados->pluck('total_series')->toArray(); 
    

        return $this->chart->barChart()
            ->setTitle('Total de Séries Feitas por Pessoa')
            ->addData('Total de Séries', $totalSeries)
            ->setLabels($nomes);
    }
}