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

 $routes->get('login', 'Usuario::login');
 $routes->post('login', 'Usuario::Autenticar');
  $routes->get('login', 'Psicologa::login');
 $routes->post('login', 'Psicologa::Autenticar');


$routes->get('cadastro', 'Usuario::criarUsuario');
$routes->post('cadastro', 'Usuario::salvarUsuario');

$routes->get('redefinir-senha', 'Usuario::redefinirSenha');
$routes->post('redefinir-senha', 'Usuario::processarRedefinicaoSenha');
 
 


