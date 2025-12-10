<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AgendamentoModel;

class Agendamento extends Controller
{
    protected $agendamentoModel;

    public function __construct()
    {
        $this->agendamentoModel = new AgendamentoModel();
    }

    // =======================================================
    // 1. ENDPOINT PARA CONSULTA (GET)
    // =======================================================
    public function getHorariosDisponiveis()
    {
        $dataSelecionada = $this->request->getVar('data'); 
        
        // Exemplo: '09/12/2025' -> '2025-12-09'
        $dataDB = \DateTime::createFromFormat('d/m/Y', $dataSelecionada)->format('Y-m-d');
        
        // Horários fixos do consultório (EXEMPLO)
        $horariosFixos = ["09:00", "10:00", "11:00", "14:00", "15:00", "16:00"];

        // Busca horários já ocupados no banco de dados
        $agendamentosDoDia = $this->agendamentoModel
                                    ->where('DATE(data_hora)', $dataDB)
                                    ->where('status', 'confirmado') 
                                    ->findAll();
        
        $horariosOcupados = [];
        foreach ($agendamentosDoDia as $agendamento) {
            $horariosOcupados[] = date('H:i', strtotime($agendamento['data_hora']));
        }

        // Calcula a diferença (Horários Fixos - Horários Ocupados)
        $horariosDisponiveis = array_values(array_diff($horariosFixos, $horariosOcupados));

        // Retorna o resultado em JSON
        return $this->response->setJSON([
            'status'   => 'success', 
            'horarios' => $horariosDisponiveis
        ]);
    }


   
    public function salvarAgendamento()
    {
        // **(PRIMEIRO: VALIDAÇÃO DE SESSÃO!)**
        // if (!session()->get('logado')) {
        //     return $this->response->setJSON(['status' => 'error', 'message' => 'Usuário não autenticado.'])->setStatusCode(401);
        // }
        // $idUsuario = session()->get('id_usuario');
        $idUsuario = 1; // Substitua pelo ID real do usuário logado

        $data = $this->request->getPost('data'); // ex: 09/12/2025
        $horario = $this->request->getPost('horario'); // ex: 14:00

        if (empty($data) || empty($horario)) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Data e horário são obrigatórios.']);
        }

        // Combina e converte para o formato DATETIME do DB
        $dataHoraStr = $data . ' ' . $horario;
        $dataHoraDB = \DateTime::createFromFormat('d/m/Y H:i', $dataHoraStr)->format('Y-m-d H:i:s');


        // Salva no banco de dados
        $dadosAgendamento = [
            'id_usuario' => $idUsuario,
            'data_hora'  => $dataHoraDB,
            'status'     => 'confirmado',
        ];

        try {
            $this->agendamentoModel->save($dadosAgendamento);
            
            return $this->response->setJSON([
                'status' => 'success', 
                'message' => 'Agendamento confirmado para ' . $dataHoraStr
            ]);
        } catch (\Exception $e) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Erro ao salvar no banco.']);
        }
    }
}