<?php namespace App\Models;

use CodeIgniter\Model;

class AgendamentoModel extends Model
{
    protected $table = 'agendamentos';
    protected $primaryKey = 'id_agendamento';

    protected $allowedFields = [
        'id_usuario',   // ID do paciente logado
        'data_hora',    // DATETIME: YYYY-MM-DD HH:MM:SS
        'status',       // 'confirmado', 'pendente', 'cancelado'
    ];
}