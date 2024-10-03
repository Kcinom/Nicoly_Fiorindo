<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    // Listar todos os produtos
    public function index()
    {
        return Produto::all();
    }

    // Mostrar um produto específico
    public function show($id)
    {
        return Produto::findOrFail($id);
    }

    // Criar um novo produto
    public function store(Request $request)
    {
        $produto = Produto::create($request->all());
        return response()->json($produto, 201); // 201 Created
    }

    // Atualizar um produto existente
    public function update(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);
        $produto->update($request->all());
        return response()->json($produto, 200); // 200 OK
    }

    // Deletar um produto
    public function destroy($id)
    {
        Produto::destroy($id);
        return response()->json(null, 204); // 204 No Content
    }
}
