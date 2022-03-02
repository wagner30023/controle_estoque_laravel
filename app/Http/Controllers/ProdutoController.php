<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function lista()
    {
        //$produtos = DB::select("select * from produtos");
        $produtos = Produto::all();

        return view('produto.listagem', ['produtos' => $produtos]);
    }

    public function mostra($id)
    {
        // $id = $resquest->input('id','0');
        //$resposta = DB::select('select * from produtos where id = ?', [$id]);

        $produto = Produto::find($id);
        if (empty($produto)) {
            return "Esse produto não existe";
        }

        return view('produto.detalhes', ['p' => $produto]);
    }

    public function novo()
    {
        return view('produto.formulario');
    }

    public function adiciona(Request $request)
    {
        // Enloquent: forma 1
        $params = $request->all();
        Produto::create($params);

        return redirect('/produtos')->withInput();
    }

    public function listaJson()
    {
        $produtos = Produto::all();
        return response()->json($produtos);
    }

    public function remove($id)
    {
        $produto = Produto::find($id);
        if($produto != null){
            $produto->delete();
            return redirect('/produtos');
        }
    }

    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produto.form_edit',['produto' => $produto]);
    }

    public function update(Request $request)
    {
        Produto::findOrFail($request->id)->update($request->all());
        return redirect('\produtos')->with('success', 'Evento atualizado com sucesso!');
    }
}
