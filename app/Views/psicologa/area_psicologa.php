<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Área - Raiane Castro</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" href="Fotos/logo.png">
    <link rel="stylesheet" href="AreaPisicologa.css">
</head>
<body>

<style>
    /* --- Configurações Globais e Variáveis --- */
:root {
    --primary-color: #0d6efd; /* Azul principal */
    --secondary-color: #00377e; /* Novo azul escuro para cards secundários */
    --body-bg-color: #eaf6ff; 
    --card-bg: rgba(255, 255, 255, 0.9);
    --text-color: #333;
    --text-color-light: #fff;
    --logo-color: #0056b3; 
    --font-family: 'Poppins', sans-serif;
    --border-radius: 16px;
    --shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
}

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

.container {
    width: 100%;
    max-width: 950px; /* Aumentei um pouco para acomodar o layout */
    z-index: 1;
}

/* --- Cabeçalho e Logo --- */
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

/* --- GRID DE NAVEGAÇÃO ATUALIZADO --- */
.navigation-grid {
    display: grid;
    /* Define um grid com 3 colunas principais, sendo a primeira mais larga */
    grid-template-columns: 1.5fr 1fr 1fr;
    grid-auto-rows: 1fr; /* Faz com que as linhas se ajustem ao conteúdo */
    gap: 1.5rem;
}

/* --- ESTILO GERAL DOS CARDS --- */
.card {
    background-color: var(--card-bg);
    border-radius: var(--border-radius);
    padding: 1.5rem;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    text-decoration: none;
    color: var(--text-color);
    box-shadow: var(--shadow);
    transition: transform 0.3s ease;
     box-shadow 0.3s ease;
    word-wrap: break-word; /* Garante que o texto quebre corretamente */
}

.card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.12);
}

.card i {
    font-size: 1.5rem;
    margin-bottom: 1rem;
    color: #555;
}

.card span {
    font-weight: 500;
    font-size: 1.1rem;
    line-height: 1.4; /* Melhora a leitura em textos com duas linhas */
}

/* CARD PRINCIPAL (AZUL ALTO) */
.card-primary {
    background-color: var(--primary-color);
    color: var(--text-color-light);
    grid-row: span 2; /* FAZ O CARD OCUPAR DUAS LINHAS DE ALTURA */
    grid-column: 1 / 2; /* Garante que ele fique na primeira coluna */
    justify-content: space-between;
}

.card-primary .card-content {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.card-primary .card-content i,
.card-primary .card-arrow i {
    color: var(--text-color-light);
    margin-bottom: 0;
}
.card-primary .card-content span {
    margin-top: 1rem;
}

.card-primary .card-arrow {
    align-self: flex-end;
}

/* NOVO ESTILO: CARDS SECUNDÁRIOS (AZUL ESCURO) */
.card-secondary {
    background-color: var(--secondary-color);
    color: var(--text-color-light);
    justify-content: center; /* Centraliza melhor o conteúdo */
    align-items: center;   /* Centraliza melhor o conteúdo */
    text-align: center;
}

.card-secondary i {
    color: var(--text-color-light);
}

/* --- RESPONSIVIDADE --- */

/* Tablets */
@media (max-width: 900px) {
    .navigation-grid {
        /* Muda para 2 colunas */
        grid-template-columns: 1fr 1fr;
    }
    .card-primary {
        /* Continua ocupando 2 linhas de altura, agora na primeira coluna do novo grid */
        grid-row: span 2;
        grid-column: 1 / 2;
    }
}

/* Celulares */
@media (max-width: 600px) {
    .header h1 {
        font-size: 2rem;
    }
    .navigation-grid {
        /* Muda para 1 coluna */
        grid-template-columns: 1fr;
        gap: 1rem;
    }
    .card-primary {
        /* Em uma coluna, não precisa mais ocupar 2 linhas de altura */
        grid-row: auto;
        grid-column: auto;
        min-height: 160px; /* Garante uma altura mínima */
    }
}
</style>

    <div class="background-flowers"></div>

    <main class="container">
        <header class="header">
            <div class="logo">
                <img src="../fotos/logo.png" alt="Logo Raiane Castro" class="logo-img">
                <span>Haiane Castro</span>
            </div>
            <h1>Minha área</h1>
        </header>

        <nav class="navigation-grid">
            
            <a href="\agenda" class="card card-primary" id="agendamentos">
                <div class="card-content">
                    <i class="fa-solid fa-calendar-days"></i>
                    <span>Próximos Agendamentos</span>
                </div>
                <div class="card-arrow">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </a>

            <a href="\resumo_financeiro" class="card" id="financeiro">
                <i class="fa-solid fa-credit-card"></i>
                <span>Resumo Financeiro Rápido</span>
            </a>
            <a href="\acompanhamento_paciente" class="card card-secondary" id="acompanhamento-pacientes">
                <i class="fa-solid fa-users"></i>
                <span>Acompanhamento de pacientes</span>
            </a>

            <a href="\gerenciar_documentos" class="card" id="documentos">
                <i class="fa-solid fa-file-lines"></i>
                <span>Documentos</span>
            </a>

        </nav>
    </main>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
    // Seleciona TODOS os links que estão dentro do container '.navigation-grid'
    const navLinks = document.querySelectorAll('.navigation-grid a');

    // Exemplo: adicionar um evento de clique a cada link (se for necessário)
    navLinks.forEach(function(link) {
        link.addEventListener('click', function(event) {
            console.log('Link clicado:', link.href);
            // Aqui você pode adicionar qualquer ação ao clique
        });
    });
});

    </script>
</body>
</html>