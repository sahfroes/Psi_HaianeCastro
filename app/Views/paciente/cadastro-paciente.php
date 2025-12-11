<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Cadastro - Psi.HaianeCastro</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="MeuCadastro.css">
    <link rel="icon" type="image/png" href="Fotos/logo.png">
</head>

<style>
    /* --- Configurações Globais e Variáveis --- */
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

/* --- ESTILOS DAS PÁGINAS DE LOGIN, CADASTRO, ETC. --- */
/* ... (todos os estilos de formulário de login que já fizemos) ... */


/* --- ESTILOS DOS PAINÉIS (Minha Área / Area Psicologa) --- */
.container { width: 100%; max-width: 950px; z-index: 1; }
.header { margin-bottom: 2rem; color: #444; }
.header .logo { display: flex; align-items: center; gap: 0.75rem; font-weight: 500; font-size: 1.1rem; color: var(--logo-color); }
.logo-img { height: 35px; width: auto; }
.header h1 { font-size: 2.5rem; font-weight: 600; margin-top: 0.5rem; }

.navigation-grid {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    gap: 1.5rem;
}
/* ... (todos os estilos dos cards dos painéis que já fizemos) ... */


/* --- ESTILOS DA PÁGINA 'MEU CADASTRO' --- */
.profile-form-container {
    background-color: var(--card-bg);
    padding: 2rem 2.5rem;
    border-radius: var(--border-radius);
    box-shadow: var(--shadow);
    margin-top: 2rem;
}

.profile-form-container h2 {
    font-size: 1.8rem;
    font-weight: 600;
    color: var(--logo-color);
    margin-bottom: 0.5rem;
}

.profile-form-container p {
    font-size: 1rem;
    color: #555;
    margin-bottom: 2rem;
    border-bottom: 1px solid #eee;
    padding-bottom: 1.5rem;
}

.form-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.form-group {
    display: flex;
    flex-direction: column;
}

.form-group-full {
    grid-column: 1 / -1;
}

.form-group label {
    font-size: 0.9rem;
    font-weight: 500;
    color: #555;
    margin-bottom: 0.5rem;
}

.form-group input[type="text"],
.form-group input[type="email"],
.form-group input[type="tel"],
.form-group input[type="date"] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 1rem;
    font-family: var(--font-family);
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

.form-group input:focus {
    outline: none;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.2);
}

.form-group input[readonly] {
    background-color: #f0f0f0;
    cursor: not-allowed;
    color: #777;
}

.form-actions {
    display: flex;
    gap: 1rem;
    margin-top: 1.5rem;
    flex-wrap: wrap;
}

.action-button {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 12px 20px;
    border: none;
    border-radius: 8px;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    text-decoration: none;
    transition: all 0.3s ease;
}

.action-button.primary {
    background-color: var(--primary-color);
    color: var(--text-color-light);
}
.action-button.primary:hover {
    background-color: var(--secondary-color);
}

.action-button.secondary {
    background-color: #6c757d;
    color: var(--text-color-light);
}
.action-button.secondary:hover {
    background-color: #5a6268;
}

.action-button.tertiary {
    background-color: transparent;
    color: #555;
}
.action-button.tertiary:hover {
    background-color: #e9ecef;
}


/* --- RESPONSIVIDADE --- */
@media (max-width: 900px) {
    /* ... (regras de responsividade que já fizemos) ... */
}
@media (max-width: 768px) {
    .form-grid {
        grid-template-columns: 1fr;
    }
    .profile-form-container {
        padding: 1.5rem;
    }
}
@media (max-width: 600px) {
    /* ... (regras de responsividade que já fizemos) ... */
}
</style>


<body>
    <div class="background-flowers"></div>

    <main class="container">
        <header class="header">
            <div class="logo">
                <img src="Fotos/logo.png" alt="Logo" class="logo-img">
                <span>Haiane Castro</span>
            </div>
            <h1>Minha área</h1>
        </header>

        <div class="profile-form-container">
            <h2>Minhas Informações</h2>
            <p>Aqui você pode visualizar e editar suas informações de cadastro.</p>
            
            <form id="profileForm">
                <div class="form-grid">
                    <div class="form-group">
                        <label for="nomeCompleto">Nome Completo</label>
                        <input type="text" id="nomeCompleto"  required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail (não pode ser alterado)</label>
                        <input type="email" id="email"  readonly>
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone / WhatsApp</label>
                        <input type="tel" id="telefone" >
                    </div>
                    <div class="form-group">
                        <label for="dataNascimento">Data de Nascimento</label>
                        <input type="date" id="dataNascimento" >
                    </div>
                   
                </div>
                
                <div class="form-actions">
                    <button type="submit" class="action-button primary">
                        <i class="fas fa-save"></i> Salvar Alterações
                    </button>
                    <a href="\redefinir_senha" class="action-button secondary">
                        <i class="fas fa-key"></i> Alterar Senha
                    </a>
                    <a href="\area_paciente" class="action-button tertiary">
                        <i class="fas fa-arrow-left"></i> Voltar ao Painel
                    </a>

                  

                </div>
            </form>
        </div>
    </main>
    
    <script src="MeuCadastro.js"></script>
</body>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const profileForm = document.getElementById('profileForm');

    if(profileForm) {
        profileForm.addEventListener('submit', function(event) {
            event.preventDefault(); // Impede o envio real do formulário
            
            // Aqui, em um projeto real, você pegaria os dados e enviaria para um servidor
            const nome = document.getElementById('nomeCompleto').value;
            console.log("Salvando dados para:", nome);

            // Simula uma resposta de sucesso
            alert("Dados salvos com sucesso!");
        });
    }
});
</script>
</html>