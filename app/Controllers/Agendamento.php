<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AgendamentoModel;
use App\Models\UsuarioModel; // Assumindo que você tem um UsuarioModel

class Agendamento extends Controller
{
    protected $agendamentoModel;
    protected $usuarioModel; 
    
    // Você pode usar a sessão global do CodeIgniter se ela já estiver configurada
    // protected $session; 

    public function __construct()
    {
        $this->agendamentoModel = new AgendamentoModel();
        $this->usuarioModel = new UsuarioModel(); 
        // $this->session = \Config\Services::session(); // Descomente se usar a sessão para o ID do usuário
    }

    // ===============================================
    // 1. VISUALIZAÇÃO DA PSICÓLOGA (Rota: /agenda)
    // ===============================================
    public function minhaAgendaPsicologa()
    {
        $data = ['titulo' => 'Minha Agenda'];
        return view('psicologa/agenda', $data);
    }

    // ===============================================
    // 2. VISUALIZAÇÃO DO PACIENTE (Rota: /agendamentos-paciente)
    // ===============================================
    public function agendamentosPaciente()
    {
        $data = ['titulo' => 'Agendar Sessão'];
        return view('paciente/agendamentos-paciente', $data);
    }
    
    // =======================================================
    // 3. ENDPOINT PARA CONSULTA DOS HORÁRIOS DISPONÍVEIS (CLIENTE)
    // Rota: /agendamento/getHorariosDisponiveis
    // =======================================================
    public function getHorariosDisponiveis()
    {
        $dataSelecionada = $this->request->getVar('data'); 
        
        if (empty($dataSelecionada)) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Data é obrigatória.']);
        }

        try {
            // Converte 'DD/MM/AAAA' para 'AAAA-MM-DD'
            $dataDB = \DateTime::createFromFormat('d/m/Y', $dataSelecionada)->format('Y-m-d');
        } catch (\Exception $e) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Formato de data inválido.']);
        }

        // Horários de trabalho fixos
        $horariosFixos = ["09:00", "10:00", "11:00", "14:00", "15:00", "16:00"];

        // Busca horários já ocupados
        $agendamentosDoDia = $this->agendamentoModel
                                 ->where('DATE(data_hora) =', $dataDB)
                                 ->where('status', 'confirmado') 
                                 ->findAll();
        
        $horariosOcupados = [];
        foreach ($agendamentosDoDia as $agendamento) {
            $horariosOcupados[] = date('H:i', strtotime($agendamento['data_hora']));
        }

        // Calcula os horários disponíveis (Fixos - Ocupados)
        $horariosDisponiveis = array_values(array_diff($horariosFixos, $horariosOcupados));

        return $this->response->setJSON([
            'status'   => 'success', 
            'horarios' => $horariosDisponiveis
        ]);
    }


    // =======================================================
    // 4. ENDPOINT PARA SALVAR O AGENDAMENTO (CLIENTE)
    // Rota: /agendamento/salvarAgendamento (POST)
    // =======================================================
    public function salvarAgendamento()
    {
        $session = session();
$idUsuario = $session->get('id_usuarios');

if (!$idUsuario) {
    return $this->response->setJSON([
        'status' => 'error',
        'message' => 'Usuário não autenticado.'
    ]);
}

        $data = $this->request->getPost('data'); 
        $horario = $this->request->getPost('horario'); 

        if (empty($data) || empty($horario)) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Data e horário são obrigatórios.']);
        }

        $dataHoraStr = $data . ' ' . $horario;
        try {
            // Conversão para o formato DATETIME do banco (Y-m-d H:i:s)
            $dataHoraDB = \DateTime::createFromFormat('d/m/Y H:i', $dataHoraStr)->format('Y-m-d H:i:s');
        } catch (\Exception $e) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Formato de data/hora inválido.']);
        }
        
        // Verifica se o horário já foi ocupado por outro usuário (prevenção de concorrência)
        $jaOcupado = $this->agendamentoModel
                         ->where('data_hora', $dataHoraDB)
                         ->where('status', 'confirmado')
                         ->first();

        if ($jaOcupado) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Este horário foi agendado agora mesmo por outro usuário. Por favor, escolha outro.']);
        }


        $dadosAgendamento = [
            'id_usuario' => $idUsuario,
            'data_hora'  => $dataHoraDB,
            'status'     => 'confirmado',
            // Adicione aqui outros campos necessários (ex: tipo de sessão, id_psicologo, etc.)
        ];

        try {
            $this->agendamentoModel->save($dadosAgendamento);
            
            return $this->response->setJSON([
                'status' => 'success', 
                'message' => 'Agendamento confirmado para ' . $dataHoraStr . '.'
            ]);
        } catch (\Exception $e) {
            // Log do erro real para debug: log_message('error', $e->getMessage());
            return $this->response->setJSON(['status' => 'error', 'message' => 'Erro ao salvar no banco.']);
        }
    }


    // =======================================================
    // 5. ENDPOINT PARA CONSULTA DOS AGENDAMENTOS (PSICÓLOGA)
    // Rota: /agendamento/getAgendamentosDoDia
    // =======================================================
    public function getAgendamentosDoDia()
    {
        $dataSelecionada = $this->request->getVar('data');
        
        if (empty($dataSelecionada)) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Data é obrigatória.']);
        }
        
        try {
            $dataDB = \DateTime::createFromFormat('d/m/Y', $dataSelecionada)->format('Y-m-d');
        } catch (\Exception $e) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Formato de data inválido.']);
        }

        // BUSCA E JOIN CORRIGIDO (assumindo usuarios.id)
        $agendamentos = $this->agendamentoModel
                             ->select('agendamentos.*, usuarios.nome as nome_paciente') 
                             
                             // 🎯 CORREÇÃO APLICADA: Assumindo que a PK da tabela 'usuarios' é 'id'
                           ->join('usuarios', 'usuarios.id_usuarios = agendamentos.id_usuario', 'left') 
                             
                             ->where('DATE(data_hora) =', $dataDB)
                             ->where('agendamentos.status', 'confirmado') 
                             ->orderBy('data_hora', 'ASC')
                             ->findAll();
        
        $listaFormatada = [];
        foreach ($agendamentos as $agendamento) {
            $listaFormatada[] = [
                'horario'        => date('H:i', strtotime($agendamento['data_hora'])),
                'nome_paciente'  => $agendamento['nome_paciente'] ?? 'Paciente Desconhecido',
                'status'         => $agendamento['status'],
            ];
        }

        return $this->response->setJSON([
            'status'       => 'success', 
            'agendamentos' => $listaFormatada
        ]);
    }
}