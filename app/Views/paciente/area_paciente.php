<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Área - Haiane Castro</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" href="Fotos/logo.png">
    <link rel="stylesheet" href="MinhaArea.css">
</head>

<style>
    /* --- Configurações Globais e Variáveis --- */
:root {
    --primary-color: #0d6efd; /* Azul principal */
    --body-bg-color: #eaf6ff; /* Novo fundo azul claro */
    --card-bg: rgba(255, 255, 255, 0.9);
    --text-color: #333;
    --text-color-light: #fff;
    --logo-color: #0056b3; /* Cor mais escura para a logo */
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
    background-color: var(--body-bg-color); /* Fundo azul aplicado */
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 20px;
    /* Adicionado para conter o fundo de flores */
    overflow: hidden; 
    position: relative;
}

/* EFEITO DE SOMBRA DE FLORES NO FUNDO */
.background-flowers {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    /* Imagem de um padrão de flores sutil */
    background-image: url('https://www.transparenttextures.com/patterns/floral.png');
    opacity: 0.05; /* Muito sutil para não atrapalhar a leitura */
    z-index: -1; /* Garante que fique atrás de todo o conteúdo */
}


/* --- Container Principal --- */
.container {
    width: 100%;
    max-width: 900px;
    z-index: 1; /* Garante que o conteúdo fique na frente do fundo */
}

/* --- Cabeçalho --- */
.header {
    margin-bottom: 2rem;
    color: #444;
}

/* LOGO ATUALIZADA */
/* LOGO ATUALIZADA */
.header .logo {
    display: flex;
    align-items: center; /* Isso alinha a imagem e o texto verticalmente */
    gap: 0.75rem; 
    font-weight: 500;
    font-size: 1.1rem;
    color: var(--logo-color);
}

/* ▼▼▼ ESTILO PARA SUA IMAGEM DE LOGO ▼▼▼ */
.logo-img {
    height: 35px; /* Defina a altura desejada para sua logo */
    width: auto;  /* A largura se ajusta automaticamente para não distorcer */
}

.header .logo i {
    font-size: 1.5rem; /* Tamanho do ícone da logo */
    color: var(--logo-color);
}

.header h1 {
    font-size: 2.5rem;
    font-weight: 600;
    margin-top: 0.5rem;
}

/* --- Grid de Navegação --- */
.navigation-grid {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    gap: 1.5rem;
}

/* --- Estilo dos Cards --- */
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
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    min-height: 160px;
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
}

/* --- Card Principal (Azul) --- */
.card-primary {
    background-color: var(--primary-color);
    color: var(--text-color-light);
    grid-column: span 1;
    justify-content: space-between;
    align-items: stretch;
}

.card-primary .card-content {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.card-primary .card-content i {
    color: var(--text-color-light);
}

.card-primary .card-arrow {
    align-self: flex-end;
}

.card-primary .card-arrow i {
    margin-bottom: 0;
    font-size: 1.5rem;
    transition: transform 0.3s ease;
}

.card-primary:hover .card-arrow i {
    transform: translateX(5px);
}

/* --- Responsividade para Celulares (sem alterações) --- */
@media (max-width: 800px) {
    .navigation-grid {
        grid-template-columns: 1fr 1fr;
    }
    .card-primary {
        grid-column: 1 / -1; 
    }
}

@media (max-width: 480px) {
    .header h1 {
        font-size: 2rem;
    }
    .navigation-grid {
        grid-template-columns: 1fr;
        gap: 1rem;
    }
    .card {
        min-height: auto;
        padding: 1.2rem;
    }
    .card i {
        font-size: 1.3rem;
    }
    .card span {
        font-size: 1rem;
    }
}
</style>

<body>

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
            <a href="/agendamentos-paciente" class="card card-primary" id="agendamentos">
                <div class="card-content">
                    <i class="fa-solid fa-calendar-days"></i>
                    <span>Meus agendamentos</span>
                </div>
                <div class="card-arrow">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </a>

            <a href="/cadastro-paciente" class="card" id="cadastro">
                <i class="fa-solid fa-user-pen"></i>
                <span>Meu cadastro</span>
            </a>

            <a href="<?= base_url('dividas') ?>"class="card" id="dividas">
                <i class="fa-solid fa-credit-card"></i>
                <span>Dividas</span>
            </a>

            <a href="/documentos" class="card" id="documentos">
                <i class="fa-solid fa-file-lines"></i>
                <span>Documentos</span>
            </a>
        </nav>
    </main>

    <script src="MinhaArea.js"></script>
</body>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    
    // Seleciona todos os links da navegação
    const navLinks = document.querySelectorAll('.navigation-grid a');

    // Adiciona um evento de clique para cada link


});
</script>

</html>

