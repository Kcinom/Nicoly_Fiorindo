<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    // Exibe informações sobre a empresa
    public function showCompanyInfo() {
        $companyInfo = [
            'missao' => 'Fornecer conteúdos de qualidade...',
            'visao' => 'Ser referência...',
            'historia' => 'Fundada em...',
            'contato' => 'Email: contato@kcin.com'
        ];
        return view('company.info', compact('companyInfo'));
    }

    // Exibe os serviços de edição de livros
    public function showEditingServices() {
        $services = [
            'descricao' => 'Serviços de edição completa de livros...',
            'custos' => 'R$ 500,00 por edição...',
            'exemplos' => 'Livro X, Livro Y...'
        ];
        return view('services.edition', compact('services'));
    }

    // Exibe o pacote surpresa de livros
    public function showBookBox() {
        $box = [
            'descricao' => 'Pacote surpresa com 5 livros...',
            'preco' => 'R$ 100,00',
        ];
        return view('shop.box', compact('box'));
    }

    // Formulário para solicitar design de capa
    public function showCoverDesignForm() {
        return view('services.cover');
    }

    // Processa a solicitação de design de capa
    public function submitCoverDesignRequest(Request $request) {
        // Aqui você processa a solicitação de design de capa
        return redirect()->back()->with('status', 'Solicitação enviada com sucesso!');
    }
}
