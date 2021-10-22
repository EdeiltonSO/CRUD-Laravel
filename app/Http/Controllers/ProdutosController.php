<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function create()
    {
        return view('produtos.create'); // resources/view/produtos/create
    }

    public function store(Request $req)
    {
        // dd($req->all()); // instância da classe Request chama função all()
        Produto::create([
            'nome' => $req->nome,
            'custo' => $req->custo,
            'preco' => $req->preco,
            'quantidade' => $req->quantidade,
        ]);

        return "Produto criado com sucesso!";
    }
}
