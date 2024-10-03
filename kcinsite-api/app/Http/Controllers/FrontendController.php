<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class FrontendController extends Controller
{
    // Exibir produtos
    public function produtos()
    {
        $response = Http::get('http://localhost:8000/api/produtos');
        $produtos = $response->json();
        return view('produtos', compact('produtos'));
    }

    // Exibir serviços
    public function servicos()
    {
        $response = Http::get('http://localhost:8000/api/servicos');
        $servicos = $response->json();
        return view('servicos', compact('servicos'));
    }
}

