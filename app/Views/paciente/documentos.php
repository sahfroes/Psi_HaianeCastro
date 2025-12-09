<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Documentos - Psi.HaianeCastro</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
 
    <link rel="stylesheet" href="Documentos.css">

    
    <link rel="icon" type="image/png" href="Fotos/logo.png">
</head>

<style>
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

/* --- ESTILOS GERAIS --- */
* { 
    margin: 0; 
    padding: 0; 
    box-sizing: border-box; 
}

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
    top: 0; 
    left: 0;
    width: 100%; 
    height: 100%;
    background-image: url('https://www.transparenttextures.com/patterns/floral.png');
    opacity: 0.05; 
    z-index: -1; 
}

a { 
    text-decoration: none; 
}

/* --- ESTRUTURA PRINCIPAL DA PÁGINA --- */
.container { 
    width: 100%; 
    max-width: 950px; 
    z-index: 1; 
}

.header { 
    margin-bottom: 2rem; 
    color: #444; 
}

.header .logo { 
    display: flex; 
    align-items: center; 
    gap: 0.75rem; 
    font-weight: 500; 
    font-size: 1.1rem; 
    color: var(--logo-color); 
}

.logo-img { 
    height: 35px; 
    width: auto; 
}

.header h1 { 
    font-size: 2.5rem; 
    font-weight: 600; 
    margin-top: 0.5rem; 
}

/* --- ESTILOS DA PÁGINA DE DOCUMENTOS --- */
.content-container {
    background-color: var(--card-bg);
    padding: 2rem 2.5rem;
    border-radius: var(--border-radius);
    box-shadow: var(--shadow);
    margin-top: 2rem;
}

/* Estilos da Tabela de Documentos com Espaçamento Corrigido */
.table-responsive {
    width: 100%;
    overflow-x: auto; 
}

.documents-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 1rem;
}

.documents-table th, 
.documents-table td {
    /* CORREÇÃO: Aumentado o espaçamento horizontal (segundo valor) */
    padding: 1.2rem 2.5rem; 
    text-align: left;
    border-bottom: 1px solid #dee2e6;
    white-space: nowrap; /* Impede que o texto quebre em várias linhas */
}

.documents-table th {
    background-color: #f8f9fa;
    font-weight: 600;
    color: #343a40;
}

.documents-table tbody tr:hover {
    background-color: #f1f1f1;
}

.documents-table i {
    margin-right: 0.75rem;
    color: #555;
}

/* Estilos dos Botões de Ação */
.action-button {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 10px 18px;
    border: none;
    border-radius: 8px;
    font-size: 0.9rem;
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

.action-button.tertiary { 
    background-color: transparent; 
    color: #555; 
}

.action-button.tertiary:hover { 
    background-color: #e9ecef; 
}

.action-button.small { 
    padding: 8px 15px; 
    font-size: 0.9rem; 
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
            <h1>Meus Documentos</h1>
        </header>

        <div class="content-container">
            <p style="margin-bottom: 2rem; font-size: 1.1rem; color: #555;">
                Consulte e baixe seus encaminhamentos, receitas e outros documentos importantes.
            </p>

            <div class="table-responsive">
                <table class="documents-table">
                    <thead>
                        <tr>
                            <th>Tipo de Documento</th>
                            <th>Data de Emissão</th>
                            <th>Profissional</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><i class="fas fa-file-prescription"></i> Receita Médica</td>
                            <td>11 de Julho de 2025</td>
                            <td>Raiane Castro</td>
                            <td>
                                <a href="#" class="action-button primary small" download>
                                    <i class="fas fa-download"></i> Baixar
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-file-export"></i> Encaminhamento</td>
                            <td>11 de Julho de 2025</td>
                            <td>Raiane Castro</td>
                            <td>
                                <a href="#" class="action-button primary small" download>
                                    <i class="fas fa-download"></i> Baixar
                                </a>
                            </td>
                        </tr>
                         <tr>
                            <td><i class="fas fa-file-alt"></i> Atestado</td>
                            <td>28 de Junho de 2025</td>
                            <td>Raiane Castro</td>
                             <td>
                                <a href="#" class="action-button primary small" download>
                                    <i class="fas fa-download"></i> Baixar
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

             <a href="\area_paciente" class="action-button tertiary" style="margin-top: 2rem;">
                <i class="fas fa-arrow-left"></i> Voltar ao Painel
            </a>
            <script src="Documentos.js"></script>
        </div>
    </main>
</body>

<script>
    // Função para abrir as abas
function openTab(evt, tabName) {
    // Esconde todo o conteúdo das abas
    let tabContent = document.getElementsByClassName("tab-content");
    for (let i = 0; i < tabContent.length; i++) {
        tabContent[i].style.display = "none";
    }

    // Remove a classe "active" de todos os links das abas
    let tabLinks = document.getElementsByClassName("tab-link");
    for (let i = 0; i < tabLinks.length; i++) {
        tabLinks[i].className = tabLinks[i].className.replace(" active", "");
    }

    // Mostra a aba atual e adiciona a classe "active" ao botão que abriu a aba
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Garante que a primeira aba esteja aberta por padrão ao carregar a página
document.addEventListener('DOMContentLoaded', (event) => {
    document.querySelector('.tab-link').click();
});
</script>
</html>