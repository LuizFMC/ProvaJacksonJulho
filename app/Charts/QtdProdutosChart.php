<?php

namespace App\Charts;

use Illuminate\Support\Facades\DB;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Empresa;
class QtdProdutosChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {

        $empresas = Empresa::All();

        $empresaNomes = $empresas->pluck('nome')->toArray();
      //  $produtoCount = $empresas->produtos->pluck('id')->toArray();

        $empresas = DB::table("produtos")
            ->selectRaw('count(1) as qtdProdutosEmpresa, empresas.nome as nome_empresa')
            ->join('empresas','empresas.id', '=','produtos.empresa_id')
            ->groupBy('empresas.nome')->get();

        //dd($empresas);

        $qtdEProdutos = [];
        $nomeEmpresas = [];

        foreach($empresas as $item){
            $qtdProdutos[]= $item->qtdProdutosEmpresa;
            $nomeEmpresas[]= $item->nome_empresa;
        }

        return $this->chart->pieChart()
            ->setTitle('Quantidade de produtos por empresa')
            ->addData($qtdProdutos)
            ->setLabels($empresaNomes);
    }
}
