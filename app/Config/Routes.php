<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Rota para a página inicial
$routes->get('/', 'Usuario::index');
$routes->view('blog', 'blog');
$routes->view('login', 'login');
$routes->view('servicos', 'servicos');
$routes->view('sobre', 'sobre');

// Rota para a lista de usuários
// (Agora ela está FORA do comentário e vai funcionar)

//somente login
 $routes->get('login', 'Usuario::login');
 $routes->post('login', 'Usuario::Autenticar');
  
$routes->get('agenda', 'agenda::index');
$routes->get('agenda', 'agenda::index');


$routes->get('pagamento', 'Pagamento::index');
$routes->get('agenda', 'Agenda::index');


$routes->get('financeiro', 'Financeiro::index');

$routes->get('cadastro', 'Usuario::criarUsuario'); // Mostra o formulário
$routes->post('cadastro', 'Usuario::store'); // Salva os dados

$routes->get('redefinir-senha', 'Usuario::redefinirSenha');
$routes->post('redefinir-senha', 'Usuario::processarRedefinicaoSenha');

$routes->get('area_psicologa', 'Usuario::area_psicologa');
$routes->get('area_paciente', 'Usuario::area_paciente');
 

$routes->view('agendamentos-paciente', 'paciente/agendamentos-paciente');
$routes->view('cadastro-paciente', 'paciente/cadastro-paciente');
$routes->view('dividas', 'paciente/dividas');
$routes->view('documentos', 'paciente/documentos');
$routes->view('redefinir_senha', 'paciente/redefinir_senha');

$routes->view('acompanhamento_paciente', 'psicologa/acompanhamento_paciente');
$routes->view('agenda', 'psicologa/agenda');
$routes->view('gerenciar_documentos', 'psicologa/gerenciar_documentos');

$routes->view('resumo_financeiro', 'psicologa/resumo_financeiro');
 


