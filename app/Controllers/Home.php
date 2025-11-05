<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\UsuarioModel;

class Home extends BaseController
{
    public function index(): string
    {
        $model = new UsuarioModel();
        $data['usuario'] = $model->findAll();
        return view('index', $data);
    }
}
