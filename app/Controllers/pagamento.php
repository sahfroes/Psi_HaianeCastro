<?php

namespace App\Controllers;

// Você precisa extender BaseController
class Pagamento extends BaseController 
{
    public function index()
    {
        // Esta função 'index' é chamada pela rota...
        // ... e ela carrega o seu arquivo HTML da pasta 'Views'
        return view('pagamento'); 
    }
}