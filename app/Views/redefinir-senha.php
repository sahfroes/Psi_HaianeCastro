<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Senha - Psi.HaianeCastro</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  
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

    <link rel="icon" type="image/png" href="fotos/sua-logo.png">
</head>
<body>
    <div class="background-flowers"></div>

    <div class="login-page-container">
        <div class="login-card">
            <div class="logo">
                <img src="fotos/logo02.png" alt="Logo">
            </div>

            <div class="avatar">
                <span class="material-icons">lock_reset</span>
            </div>
            
            <form id="esqueceuSenhaForm">
                <p style="margin-bottom: 1.5rem; color: #555;">
                    Perdeu sua senha? Por favor, digite seu endereço de e-mail. Você receberá um link para criar uma nova senha.
                </p>

                <div class="input-group">
                    <label for="email">Seu E-mail de Cadastro</label>
                    <input type="email" id="email" name="email" required>
                </div>

                  <div class="input-group">
                    <label for="senha">Digite a nova senha</label>
                    <input type="password" id="senha" name="senha" required>
                </div>

                <button type="submit" class="login-button">Redefinir Senha</button>
            </form>
            
            <div class="extra-links" style="justify-content: center;">
                <a href="<?= base_url('login')?>">Voltar para o Login</a>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const esqueceuSenhaForm = document.getElementById('esqueceuSenhaForm');
    const emailInput = document.getElementById('email');

    esqueceuSenhaForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Impede o envio do formulário

        const email = emailInput.value.trim();

        // 1. Valida se o campo de e-mail está preenchido
        if (email === '') {
            alert('Por favor, digite seu endereço de e-mail.');
            return;
        }

        // 2. Valida o formato do e-mail
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert('Por favor, insira um e-mail com formato válido.');
            return;
        }

        // 3. Simula o envio e exibe a mensagem de confirmação
        // (Em um projeto real, aqui seria enviado o e-mail para o servidor)
        alert('Se houver uma conta associada a este e-mail, um link para redefinição de senha foi enviado. Por favor, verifique sua caixa de entrada e spam.');

        // 4. Redireciona de volta para a página de login após alguns segundos
        setTimeout(function() {
            window.location.href = 'login.php';
        }, 3000); // 3000 milissegundos = 3 segundos
    });
});
    </script>
</body>
</html>