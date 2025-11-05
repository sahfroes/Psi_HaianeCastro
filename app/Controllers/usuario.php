<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsuarioModel;

class Usuario extends Controller
{
    public function index()
    {
        $model = new UsuarioModel();
        $data['usuarios'] = $model->findAll();

        return view('index', $data);

     
    }

    public function criarUsuario()
    {
        $model = new UsuarioModel();
        return view('criar-usuario');
    }
  
}

