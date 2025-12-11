<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table      = 'usuarios';
    protected $primaryKey = 'id_usuarios';

    protected $allowedFields = [
        'nome', 
        'email',
        'senha',
        'tipo'
    ];

    protected $beforeInsert = ['hashPassword'];
    protected $beforeUpdate = ['hashPassword'];

    protected function hashPassword(array $data)
    {
        if (isset($data['data']['senha'])) {
            // Usa o algoritmo de hash seguro do PHP
            $data['data']['senha'] = password_hash($data['data']['senha'], PASSWORD_DEFAULT);
        }
        return $data;
    }

    protected $validationRules    = [
        'nome'  => 'required|min_length[3]|max_length[255]',
        'email' => 'required|valid_email|is_unique[usuarios.email]',
        'senha' => 'required|min_length[6]',
        'tipo'  => 'required'
    ];
    
protected $validationMessages = [
        'nome' => [
            'required'    => 'O campo Nome é obrigatório.',
            'min_length'  => 'O campo Nome deve ter pelo menos 3 caracteres.',
            'max_length'  => 'O campo Nome não pode exceder 255 caracteres.',
        ],
        'email' => [
            'required'    => 'O campo Email é obrigatório.',
            'valid_email' => 'Por favor, insira um endereço de email válido.',
            'is_unique'   => 'Este email já está em uso.',
        ],
        'senha' => [
            'required'    => 'O campo Senha é obrigatório.',
            'min_length'  => 'A Senha deve ter pelo menos 6 caracteres.',
        ],
        'tipo' => [ 
            'required' => 'Você deve selecionar um tipo de conta (Paciente ou Psicóloga).'
        ]
    ];



       protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $editdField  = 'edit_at';
    
}


