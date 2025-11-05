<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Psi.HaianeCastro</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="login.css">
    <link rel="icon" type="image/png" href="MinhaArea/Fotos/logo.png">
</head>

<style>
    /* --- CONFIGURAÇÕES GLOBAIS E VARIÁVEIS --- */
:root {
    --primary-color: #0d6efd;
    --secondary-color: #00377e;
    --body-bg-color: #eaf6ff; 
    --card-bg: rgba(255, 255, 255, 0.95);
    --text-color: #333;
    --text-color-light: #fff;
    --logo-color: #0056b3; 
    --font-family: 'Poppins', sans-serif;
    --border-radius: 16px;
    --shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
}

/* --- ESTILOS GERAIS (para todas as páginas) --- */
* { margin: 0; padding: 0; box-sizing: border-box; }

body {
    font-family: var(--font-family);
    background-color: var(--body-bg-color);
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 20px;
    overflow-x: hidden; 
}

.background-flowers {
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background-image: url('https://www.transparenttextures.com/patterns/floral.png');
    opacity: 0.05; 
    z-index: -1; 
}

a { color: var(--primary-color); text-decoration: none; }
a:hover { text-decoration: underline; }

/* --- ESTILOS DA PÁGINA DE LOGIN --- */
.login-page-container {
    width: 100%;
    max-width: 420px;
}

.login-card {
    background-color: var(--card-bg);
    padding: 40px 30px;
    border-radius: var(--border-radius);
    box-shadow: var(--shadow);
    text-align: center;
    position: relative;
}

.login-card .logo img {
    max-width: 150px;
    margin-bottom: 20px;
}

.login-card .avatar {
    background-color: var(--primary-color);
    border-radius: 50%;
    width: 70px; height: 70px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: -55px auto 20px auto;
    border: 4px solid var(--body-bg-color);
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}

.login-card .avatar .material-icons { color: var(--text-color-light); font-size: 38px; }

.input-group { margin-bottom: 1rem; text-align: left; }
.input-group label { display: block; margin-bottom: 5px; font-size: 0.9rem; font-weight: 500; color: #555; }
.input-group input {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-size: 1rem;
    font-family: var(--font-family);
}

.remember-me {
    display: flex;
    align-items: center;
    margin-bottom: 1.5rem;
    font-size: 0.9rem;
}
.remember-me input { margin-right: 8px; }

.login-button {
    background-color: var(--primary-color);
    color: var(--text-color-light);
    width: 100%;
    padding: 14px;
    border: none;
    border-radius: 8px;
    font-size: 1.1rem;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.3s ease;
}
.login-button:hover { background-color: var(--secondary-color); }

.extra-links {
    margin-top: 1.5rem;
    font-size: 0.9rem;
    display: flex;
    justify-content: space-between;
}
/* --- ESTILO PARA O SELETOR DE PERFIL NO LOGIN --- */
.profile-selector-group {
    text-align: left;
    margin-bottom: 1.5rem;
}
.profile-selector-group .group-label {
    display: block;
    margin-bottom: 8px;
    font-size: 0.9rem;
    font-weight: 500;
    color: #555;
}
.profile-options {
    display: flex;
    justify-content: flex-start;
    gap: 25px;
}
.profile-option {
    display: flex;
    align-items: center;
    gap: 6px;
}
.profile-option label {
    font-size: 0.9rem;
    color: #333;
}
/* --- ESTILOS DOS PAINÉIS (Minha Área / Area Psicologa) --- */
.container { width: 100%; max-width: 950px; z-index: 1; }
.header { margin-bottom: 2rem; color: #444; }
.header .logo { display: flex; align-items: center; gap: 0.75rem; font-weight: 500; font-size: 1.1rem; color: var(--logo-color); }
.header .logo-img { height: 35px; width: auto; }
.header h1 { font-size: 2.5rem; font-weight: 600; margin-top: 0.5rem; }

.navigation-grid {
    display: grid;
    grid-template-columns: 1.5fr 1fr 1fr;
    grid-auto-rows: 1fr;
    gap: 1.5rem;
}

.card {
    background-color: var(--card-bg);
    border-radius: var(--border-radius);
    padding: 1.5rem;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    color: var(--text-color);
    box-shadow: var(--shadow);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    word-wrap: break-word;
}
.card:hover { transform: translateY(-8px); box-shadow: 0 12px 25px rgba(0,0,0,0.12); }
.card i { font-size: 1.5rem; margin-bottom: 1rem; color: #555; }
.card span { font-weight: 500; font-size: 1.1rem; line-height: 1.4; }

.card-primary { background-color: var(--primary-color); color: var(--text-color-light); grid-row: span 2; grid-column: 1 / 2; justify-content: space-between; }
.card-primary .card-content { display: flex; flex-direction: column; align-items: flex-start; }
.card-primary .card-content i, .card-primary .card-arrow i { color: var(--text-color-light); margin-bottom: 0; }
.card-primary .card-content span { margin-top: 1rem; }
.card-primary .card-arrow { align-self: flex-end; }
.card-secondary { background-color: var(--secondary-color); color: var(--text-color-light); justify-content: center; align-items: center; text-align: center; }
.card-secondary i { color: var(--text-color-light); }

/* --- RESPONSIVIDADE --- */
@media (max-width: 900px) {
    .navigation-grid { grid-template-columns: 1fr 1fr; }
    .card-primary { grid-row: span 2; grid-column: 1 / 2; }
}

@media (max-width: 600px) {
    body { padding: 10px; }
    .login-card { padding: 25px 20px; }
    .header h1 { font-size: 2rem; }
    .navigation-grid { grid-template-columns: 1fr; gap: 1rem; }
    .card-primary { grid-row: auto; grid-column: auto; min-height: 160px; }
}
</style>


<body>


    <div class="background-flowers"></div>

    <div class="login-page-container">
        <div class="login-card">
            <div class="logo">
                <img src="fotos/logo02.png" alt="Logo">
            </div>

            <div class="avatar">
                <span class="material-icons">person</span>
            </div>
            
            <form id="loginForm">
                
                <div class="profile-selector-group">
                    <label class="group-label">Entrar como:</label>
                    <div class="profile-options">
                        <div class="profile-option">
                            <input type="radio" id="perfilPaciente" name="perfil" value="paciente" checked>
                            <label for="perfilPaciente">Paciente</label>
                        </div>
                        <div class="profile-option">
                            <input type="radio" id="perfilPsicologa" name="perfil" value="psicologa">
                            <label for="perfilPsicologa">Psicóloga</label>
                        </div>
                    </div>
                </div>
                <div class="input-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="remember-me">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Lembrar meu e-mail</label>
                </div>
                <button type="submit" class="login-button">Entrar</button>
            </form>
            
            <div class="extra-links">
                <a href=>Esqueceu a senha?</a>
                <a href="<?= base_url('cadastro')?>">Fazer cadastro</a>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const cadastroForm = document.getElementById('cadastroForm');
    const nomeInput = document.getElementById('nome');
    const emailInput = document.getElementById('emailCadastro');
    const senhaInput = document.getElementById('senhaCadastro');
    const confirmarSenhaInput = document.getElementById('confirmarSenha');

    cadastroForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Impede o envio padrão do formulário

        const nome = nomeInput.value.trim();
        const email = emailInput.value.trim();
        const senha = senhaInput.value;
        const confirmarSenha = confirmarSenhaInput.value;

        // 1. Validação de campos vazios
        if (nome === '' || email === '' || senha === '' || confirmarSenha === '') {
            alert('Por favor, preencha todos os campos.');
            return;
        }

        // 2. Validação do formato de e-mail
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert('Por favor, insira um e-mail válido.');
            return;
        }

        // 3. Validação de força da senha (mínimo 6 caracteres)
        if (senha.length < 6) {
            alert('A senha deve ter no mínimo 6 caracteres.');
            return;
        }

        // 4. Validação de confirmação de senha
        if (senha !== confirmarSenha) {
            alert('As senhas não coincidem. Por favor, tente novamente.');
            senhaInput.focus(); // Coloca o foco no campo de senha
            return;
        }

        // Se todas as validações passarem, exibe sucesso e redireciona
        alert('Cadastro realizado com sucesso!\nVocê será redirecionado para a página de login.');

        // Limpa os campos do formulário
        cadastroForm.reset();

        // Redireciona para a página de login após 2 segundos
        setTimeout(function() {
            window.location.href = 'login.';
        }, 2000); // 2000 milissegundos = 2 segundos
        
        /*
        Em um cenário real, aqui você enviaria os dados (nome, email, senha)
        para um servidor para que eles fossem salvos em um banco de dados.
        A lógica de 'fetch' que você tinha no seu código original entraria aqui.
        */
    });
});
    </script>
</body>
</html>