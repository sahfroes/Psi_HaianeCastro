<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// =======================================================
// ROTAS PÚBLICAS/GERAIS
// =======================================================
$routes->get('/', 'Usuario::index');
$routes->view('blog', 'blog');
$routes->view('servicos', 'servicos');
$routes->view('sobre', 'sobre');

// =======================================================
// ROTAS DE AUTENTICAÇÃO
// =======================================================
$routes->get('login', 'Usuario::login');
$routes->post('login', 'Usuario::Autenticar');

$routes->get('cadastro', 'Usuario::criarUsuario'); // Mostra o formulário
$routes->post('cadastro', 'Usuario::store'); // Salva os dados

$routes->get('redefinir-senha', 'Usuario::redefinirSenha');
$routes->post('processar-redefinicao-senha', 'Usuario::processarRedefinicaoSenha');

// =======================================================
// ROTAS DE ÁREAS RESTRITAS (Painéis)
// =======================================================
$routes->get('area_psicologa', 'Usuario::area_psicologa');
$routes->get('area_paciente', 'Usuario::area_paciente');

// =======================================================
// ROTAS DA PSICÓLOGA (Controller Agendamento e Views)
// Objetivo: URI 'agenda' -> Controller Agendamento
// =======================================================

// 1. Rota para a página da agenda da psicóloga (URI: /agenda)
// Método: minhaAgendaPsicologa deve retornar a View 'psicologa/agenda'
$routes->get('agenda', 'Agendamento::minhaAgendaPsicologa'); 

$routes->view('gerenciar_documentos', 'psicologa/gerenciar_documentos');
$routes->view('resumo_financeiro', 'psicologa/resumo_financeiro');
$routes->view('acompanhamento_paciente', 'psicologa/acompanhamento_paciente');


// =======================================================
// ROTAS DO PACIENTE (Controller Agendamento e Views)
// Objetivo: URI 'agendamentos-paciente' -> Controller Agendamento
// =======================================================

// 1. Rota para a página principal de agendamentos do paciente (URI: /agendamentos-paciente)
// Método: agendamentosPaciente deve retornar a View 'paciente/agendamentos-paciente'
$routes->get('agendamentos-paciente', 'Agendamento::agendamentosPaciente'); 

$routes->view('cadastro-paciente', 'paciente/cadastro-paciente');
$routes->view('dividas', 'paciente/dividas');
$routes->view('documentos', 'paciente/documentos');
$routes->view('redefinir_senha', 'paciente/redefinir_senha');


// =======================================================
// ENDPOINTS AJAX/API PARA O AGENDAMENTO (Controller Agendamento)
// Estes endpoints são chamados via JavaScript (Fetch/AJAX)
// =======================================================

// O CodeIgniter deve usar o Controller Agendamento
$routes->group('agendamento', function ($routes) {
    // Busca horários disponíveis (usado pelo cliente)
    $routes->get('getHorariosDisponiveis', 'Agendamento::getHorariosDisponiveis'); 
    
    // Salva o agendamento no DB (usado pelo cliente)
    $routes->post('salvarAgendamento', 'Agendamento::salvarAgendamento');
    
    // Busca agendamentos do dia (usado pela psicóloga)
    $routes->get('getAgendamentosDoDia', 'Agendamento::getAgendamentosDoDia'); 
});

// Outras rotas (mantidas do seu original)
$routes->get('pagamento', 'Pagamento::index');
$routes->get('financeiro', 'Financeiro::index');