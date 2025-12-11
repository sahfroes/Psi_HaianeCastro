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

    /**
     * Exibe o formulario de cadastro
     */
    public function criarUsuario()
    {
        helper(['form']);
        return view('cadastro', [
            'validation' => \Config\Services::validation()
        ]);
    }

    /**
     * Salva o novo usuário e faz LOGIN AUTOMÁTICO
     */
    public function store()
    {
        helper(['form']);
        $model = new UsuarioModel();

        // 1. Regras de Validação
        $rules = [
            'nome'  => 'required|min_length[3]|max_length[255]',
            'email' => 'required|valid_email|is_unique[usuarios.email]',
            'tipo'  => 'required',
            'senha' => 'required|min_length[6]',
            'confirmar_senha' => 'required|matches[senha]' // Verifica se as senhas batem
        ];

        // 2. Executa a validação
        if (! $this->validate($rules, ['confirmar_senha' => ['matches' => 'As senhas não coincidem.']])) {
            // Se falhar (ex: senhas não batem), volta ao cadastro e mostra os erros
            return view('cadastro', [
                'validation' => $this->validator
            ]);
        }

        // 3. Validação passou! Prepara os dados.
        $data = [
            'nome'  => $this->request->getPost('nome'),
            'email' => $this->request->getPost('email'),
            'tipo'  => $this->request->getPost('tipo'),
            'senha' => $this->request->getPost('senha') // Passa a senha em texto plano (o Model irá criptografar)
        ];

        // 4. Salva no banco
        if ($model->save($data)) {
            // SUCESSO! AGORA FAZ O LOGIN AUTOMÁTICO
            
            $session = session(); // Inicia a sessão
            $novo_id = $model->getInsertID(); // Pega o ID do usuário que acabou de ser criado

            // Cria os dados da sessão (igual a função de login faz)
            $session_data = [
                'id_usuarios' => $novo_id,
                'nome'       => $data['nome'],
                'email'      => $data['email'],
                'tipo'       => $data['tipo'],
                'logado'     => TRUE
            ];
            $session->set($session_data); // Salva na sessão

            // 5. Redireciona para o painel correto
            if ($data['tipo'] == 'psicologa') {
                return redirect()->to('/area_psicologa'); // Rota do painel da psicóloga
            } else {
                return redirect()->to('/area_paciente'); // Rota do painel do paciente
            }

        } else {
            // Falha inesperada
            return redirect()->back()->withInput()->with('error', 'Ocorreu um erro inesperado ao salvar.');
        }
    }

    /**
     * Exibe a página de login
     */
    public function login()
    {
        helper(['form']);
        return view('login');
    }

    /**
     * Processa a tentativa de login manual
     */
    public function Autenticar()
    {
        helper(['form']);
        $model = new UsuarioModel();
        $session = session();

        $email = $this->request->getPost('email');
        $senha_digitada = $this->request->getPost('senha');
        $tipo_selecionado = $this->request->getPost('tipo');

        $usuario = $model->where('email', $email)->first();

        // Verifica se o usuário existe E se a senha digitada bate com a senha criptografada
        if ($usuario && password_verify($senha_digitada, $usuario['senha'])) {
            
            // Verifica o TIPO
            if ($usuario['tipo'] != $tipo_selecionado) {
                return redirect()->back()->withInput()->with('error', 'Tipo de acesso incorreto.');
            }

            // Salva os dados na sessão
            $session_data = [
                'id_usuarios' => $usuario['id_usuarios'],
                'nome'       => $usuario['nome'],
                'email'      => $usuario['email'],
                'tipo'       => $usuario['tipo'],
                'logado'     => TRUE
            ];
            $session->set($session_data);

            // Redireciona para o painel correto
         if ($usuario['tipo'] == 'psicologa') {
                // A rota é 'area-psicologa', conforme seu Routes.php
                return redirect()->to('/area_psicologa'); 
            } else {
                // Se não for 'psicologa', é 'paciente'.
                // A rota é 'area-paciente'.
                return redirect()->to('/area_paciente');
            }
        } else {
            // Falha: Email não encontrado OU senha incorreta
            return redirect()->back()->withInput()->with('error', 'E-mail, senha ou tipo de acesso inválidos.');
        }
    }

    

    /**
     * Exibe a página de redefinir senha
     */
    public function redefinirSenha()
    {
        return view('redefinir-senha');
    }

    /**
     * Processa a redefinição de senha (FUNÇÃO CORRIGIDA)
     */
 /**   public function processarRedefinicaoSenha()
   * {
       *  $email = $this->request->getPost('email');
       * $novaSenha = $this->request->getPost('senha');

     *   $model = new UsuarioModel();
      *  $usuario = $model->where('email', $email)->first();

      *  if ($usuario) {
      *      // CORRIGIDO: Usa o $model para atualizar e criptografa a nova senha
      *      $novaSenhaHash = password_hash($novaSenha, PASSWORD_DEFAULT);
       *     $model->update($usuario['id_usuarios'], ['senha' => $novaSenhaHash]);
            
       *     return redirect()->to('/login')->with('success', 'Senha redefinida com sucesso. Faça login com sua nova senha.');
       * } else {
       *     return redirect()->back()->with('error', 'Endereço de e-mail não encontrado.');      
       * }
  *  }
*/
    public function processarRedefinicaoSenha()
{
    $email = $this->request->getPost('email');
    $novaSenha = $this->request->getPost('senha');

    $model = new UsuarioModel();
    $usuario = $model->where('email', $email)->first();

    if ($usuario) {
        
        // 1. Passamos a nova senha em TEXTO PURO (não hashada)
        $data = [
            'senha' => $novaSenha 
        ];

        // 2. O CodeIgniter Model (e o beforeUpdate) fará o hash
        // O $beforeUpdate é acionado pelo método update(), 
        // mas é preciso garantir que ele funcione corretamente com $this->update().
        $model->update($usuario['id_usuarios'], $data);
        
        return redirect()->to('/login')->with('success', 'Senha redefinida com sucesso. Faça login com sua nova senha.');
    } else {
        return redirect()->back()->with('error', 'Ocorreu um erro na redefinição. Verifique o e-mail digitado.');
    }
}

    // No seu Controller App\Controllers\Usuario.php



    /**
     * Faz o logout do usuário
     */
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }

    public function area_psicologa()
    {
        // Aqui você carrega a view da psicóloga
        // Por exemplo:
       return view('psicologa/area_psicologa');
      
        // return view('sua_view_psicologa'); 
    }

    public function area_paciente()
    {
        // Aqui você carrega a view do paciente
        // Por exemplo:
       return view('paciente/area_paciente');
        // return view('sua_view_paciente');
    }
    // --- (Outras funções que você tinha: perfil, listaPacientes, etc.) ---
    // (O resto do seu controller estava bom, deletei apenas a 'cadastrar()' duplicada
    // e a 'update()' incompleta)

}

