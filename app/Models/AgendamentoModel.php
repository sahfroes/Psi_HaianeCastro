<?php namespace App\Models;

use CodeIgniter\Model;

class AgendamentoModel extends Model
{
    protected $table      = 'agendamentos';
    protected $primaryKey = 'id'; // Sua PK na tabela 'agendamentos'

    // ESTA LINHA É A MAIS IMPORTANTE:
    // Garante que o CodeIgniter permite que estes campos sejam inseridos/atualizados.
    protected $allowedFields = ['id_usuario', 'data_hora', 'status']; 

    // Se você usa os campos created_at e updated_at
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Seus métodos de busca adicionais podem vir aqui, se necessário.
}