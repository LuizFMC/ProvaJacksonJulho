<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Empresa;
use Illuminate\Http\Request;
use App\Charts\QtdProdutosChart;

class ProdutoController extends Controller
{
    public function index()
    {
        $dados = Produto::with('empresa')->get();
        return view("produto.list", ["dados" => $dados]);
    }

    public function create()
    {
        $empresas = Empresa::all();
        return view("produto.form", ['empresas' => $empresas]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => "required",
            'valor' => "required",
            'qtd' => "required",
            'qtdestoque' => "required",
            'imagem' => "nullable|image|mimes:png,jpeg,jpg",
            'empresa_id' => "required"
        ], [
            'nome.required' => "O nome é obrigatório",
            'valor.required' => "O valor é obrigatório",
            'qtd.required' => "A quantidade é obrigatória",
            'qtdestoque.required' => "A quantidade em estoque é obrigatória",
            'imagem.image' => "Deve ser enviada uma imagem",
            'imagem.mimes' => "A imagem deve ser da extensão PNG, JPEG ou JPG",
            'empresa_id.required' => "A empresa é obrigatória"
        ]);

        $data = $request->all();
        $imagem = $request->file('imagem');

        if ($imagem) {
            $nome_arquivo = date('YmdHis') . "." . $imagem->getClientOriginalExtension();
            $diretorio = "imagem/produto/";
            $imagem->storeAs($diretorio, $nome_arquivo, 'public');
            $data['imagem'] = $diretorio . $nome_arquivo;
        }

        Produto::create($data);
        return redirect('produto');
    }

   

    public function edit(string $id)
    {
        $dado = Produto::findOrFail($id);
        $empresas = Empresa::all();

        return view("produto.form", [
            'dado' => $dado,
            'empresas' => $empresas
        ]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nome' => "required",
            'valor' => "nullable",
            'qtd' => "required",
            'qtdestoque' => "required",
            'imagem' => "nullable|image|mimes:png,jpeg,jpg",
            'empresa_id' => "required"
        ], [
            'nome.required' => "O nome é obrigatório",
            'valor.required' => "O valor é obrigatório",
            'qtd.required' => "A quantidade é obrigatória",
            'qtdestoque.required' => "A quantidade em estoque é obrigatória",
            'imagem.image' => "Deve ser enviada uma imagem",
            'imagem.mimes' => "A imagem deve ser da extensão PNG, JPEG ou JPG",
            'empresa_id.required' => "A empresa é obrigatória"
        ]);

      
        $data = $request->all();
        $imagem = $request->file('imagem');

        if ($imagem) {
            $nome_arquivo = date('YmdHis') . "." . $imagem->getClientOriginalExtension();
            $diretorio = "imagem/produto/";
            $imagem->storeAs($diretorio, $nome_arquivo, 'public');
            $data['imagem'] = $diretorio . $nome_arquivo;
        }

        Produto::updateOrCreate(
            ['id' => $request->id],
            $data
        );
    }

    public function destroy($id)
    {
        $dado = Produto::findOrFail($id);
        $dado->delete();
        return redirect('produto');
    }

    public function search(Request $request)
    {
        $query = Produto::query();

        if (!empty($request->nome)) {
            $query->where("nome", "like", "%" . $request->nome . "%");
        }

        if (!empty($request->empresa_id)) {
            $query->where("empresa_id", $request->empresa_id);
        }

        $dados = $query->get();

        return view("produto.list", ["dados" => $dados]);
    }

    public function chart(QtdProdutosChart $QtdProdutosChart)
    { 
        return view("produto.chart", ["QtdProdutosChart" => $QtdProdutosChart->build()]);
    }
    
    
}