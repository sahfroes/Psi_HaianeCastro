<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acompanhamento de Pacientes - Psi.HaianeCastro</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- CSS dedicado para esta página -->
    <link rel="stylesheet" href="AcompanhamentoPacientes.css">
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

/* --- ESTILOS DA PÁGINA DE ACOMPANHAMENTO --- */
.content-container {
    background-color: var(--card-bg);
    padding: 2rem 2.5rem;
    border-radius: var(--border-radius);
    box-shadow: var(--shadow);
    margin-top: 2rem;
}

/* Lista de Pacientes */
.patient-list {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.patient-card {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 1.5rem;
    background-color: #fff;
    border: 1px solid #e0e0e0;
    border-radius: 8px;
}

.patient-info {
    display: flex;
    align-items: center;
    gap: 1rem;
    font-size: 1.2rem;
    font-weight: 500;
}

.patient-info i {
    font-size: 1.5rem;
    color: var(--primary-color);
}

/* ESTILOS DO MODAL */
.modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6);
    display: none;
    /* Escondido por padrão */
    justify-content: center;
    align-items: center;
    z-index: 1000;
    animation: fadeInModal 0.3s;
}

.modal-content {
    background-color: #fff;
    padding: 2.5rem;
    border-radius: var(--border-radius);
    width: 90%;
    max-width: 800px;
    max-height: 90vh;
    overflow-y: auto;
    position: relative;
}

.close-modal-btn {
    position: absolute;
    top: 15px;
    right: 20px;
    background: transparent;
    border: none;
    font-size: 1.8rem;
    color: #888;
    cursor: pointer;
}

.modal-content h2 {
    font-size: 2rem;
    color: var(--logo-color);
    margin-bottom: 1.5rem;
    padding-bottom: 1rem;
    border-bottom: 1px solid #eee;
}

/* Abas do Modal */
.modal-tabs {
    display: flex;
    border-bottom: 2px solid #dee2e6;
    margin-bottom: 1.5rem;
}

.modal-tab-link {
    background-color: transparent;
    border: none;
    padding: 0.8rem 1.2rem;
    cursor: pointer;
    font-size: 1rem;
    font-weight: 500;
    color: #6c757d;
    border-bottom: 3px solid transparent;
    margin-bottom: -2px;
}

.modal-tab-link.active {
    color: var(--primary-color);
    border-bottom-color: var(--primary-color);
}

.modal-tab-content {
    display: none;
}

.modal-tab-content.active {
    display: block;
}

/* Dados Cadastrais no Modal */
.profile-data-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1.5rem;
}

.data-item {
    font-size: 1.1rem;
}

.data-item strong {
    color: #555;
}

.data-item.full-width {
    grid-column: 1 / -1;
}

/* Tabela de Documentos no Modal */
.table-responsive {
    width: 100%;
    overflow-x: auto;
}

.documents-table {
    width: 100%;
    border-collapse: collapse;
}

.documents-table th,
.documents-table td {
    padding: 1rem;
    text-align: left;
    border-bottom: 1px solid #dee2e6;
}

.documents-table th {
    background-color: #f8f9fa;
}

.documents-table i {
    margin-right: 0.5rem;
}

/* Botões de Ação */
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
}

@keyframes fadeInModal {
    from {
        opacity: 0;
    }

    to {
        opacity: 1;
    }
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
            <h1>Acompanhamento de Pacientes</h1>
        </header>

        <div class="content-container">
            <p style="margin-bottom: 2rem; font-size: 1.1rem; color: #555;">
                Visualize a lista de seus pacientes e acesse os detalhes de cada um.
            </p>
            <div class="patient-list">
                <!-- Paciente 1 -->
                <div class="patient-card">
                    <div class="patient-info">
                        <i class="fas fa-user-circle"></i>
                        <span>João Silva</span>
                    </div>
                    <button class="action-button primary small view-details-btn" data-patient-id="joao_silva">
                        <i class="fas fa-eye"></i> Ver Detalhes
                    </button>
                </div>
                <!-- Paciente 2 -->
                <div class="patient-card">
                    <div class="patient-info">
                        <i class="fas fa-user-circle"></i>
                        <span>Maria Oliveira</span>
                    </div>
                    <button class="action-button primary small view-details-btn" data-patient-id="maria_oliveira">
                        <i class="fas fa-eye"></i> Ver Detalhes
                    </button>
                </div>
                <!-- Paciente 3 -->
                <div class="patient-card">
                    <div class="patient-info">
                        <i class="fas fa-user-circle"></i>
                        <span>Carlos Souza</span>
                    </div>
                    <button class="action-button primary small view-details-btn" data-patient-id="carlos_souza">
                        <i class="fas fa-eye"></i> Ver Detalhes
                    </button>
                </div>
            </div>
             <a href="AreaPisicologa.html" class="action-button tertiary" style="margin-top: 2rem;">
                <i class="fas fa-arrow-left"></i> Voltar ao Painel
            </a>
        </div>
    </main>
    
    <!-- ESTRUTURA DO MODAL (escondido por padrão) -->
    <div id="patient-modal" class="modal-overlay">
        <div class="modal-content">
            <button id="close-modal-btn" class="close-modal-btn"><i class="fas fa-times"></i></button>
            <h2 id="modal-patient-name">Nome do Paciente</h2>
            
            <div class="modal-tabs">
                <button class="modal-tab-link active" data-tab="dados-cadastrais">Dados Cadastrais</button>
                <button class="modal-tab-link" data-tab="documentos">Documentos</button>
            </div>

            <!-- Conteúdo da Aba: Dados Cadastrais -->
            <div id="dados-cadastrais" class="modal-tab-content active">
                <div id="modal-profile-data" class="profile-data-grid">
                    <!-- Dados serão inseridos aqui via JS -->
                </div>
            </div>

            <!-- Conteúdo da Aba: Documentos -->
            <div id="documentos" class="modal-tab-content">
                <div class="table-responsive">
                    <table id="modal-documents-table" class="documents-table">
                        <thead>
                            <tr>
                                <th>Tipo de Documento</th>
                                <th>Data de Emissão</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Documentos serão inseridos aqui via JS -->
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
             <a href="\area_psicologa" class="action-button tertiary" style="margin-top: 2rem;">
                <i class="fas fa-arrow-left"></i> Voltar ao Painel
            </a>
        </div>
        </div>
    </div>

    <script src="AcompanhamentoPacientes.js"></script>
</body>

<script>
    document.addEventListener('DOMContentLoaded', function() {

    // --- DADOS DE EXEMPLO DOS PACIENTES ---
    const patientData = {
        'joao_silva': {
            nome: "João Silva",
            email: "joao.silva@email.com",
            telefone: "(11) 91234-5678",
            dataNascimento: "20/05/1985",
            endereco: "Rua das Amoreiras, 123, São Paulo - SP",
            documentos: [
                { tipo: "Receita Médica", data: "15/07/2025", url: "#" },
                { tipo: "Encaminhamento", data: "15/07/2025", url: "#" }
            ]
        },
        'maria_oliveira': {
            nome: "Maria Oliveira",
            email: "maria.o@email.com",
            telefone: "(21) 98765-4321",
            dataNascimento: "10/11/1992",
            endereco: "Avenida Copacabana, 456, Rio de Janeiro - RJ",
            documentos: [
                { tipo: "Atestado de Comparecimento", data: "18/07/2025", url: "#" }
            ]
        },
        'carlos_souza': {
            nome: "Carlos Souza",
            email: "carlos.souza@email.com",
            telefone: "(31) 99999-8888",
            dataNascimento: "01/02/1978",
            endereco: "Rua dos Inconfidentes, 789, Belo Horizonte - MG",
            documentos: []
        }
    };
    // ------------------------------------

    const modal = document.getElementById('patient-modal');
    const closeModalBtn = document.getElementById('close-modal-btn');
    const viewDetailsBtns = document.querySelectorAll('.view-details-btn');

    // Lógica para abrir o modal
    viewDetailsBtns.forEach(button => {
        button.addEventListener('click', () => {
            const patientId = button.dataset.patientId;
            const data = patientData[patientId];
            if (data) {
                populateModal(data);
                modal.style.display = 'flex';
            }
        });
    });

    // Lógica para fechar o modal
    closeModalBtn.addEventListener('click', () => {
        modal.style.display = 'none';
    });
    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });

    // Função para preencher o modal com os dados do paciente
    function populateModal(data) {
        document.getElementById('modal-patient-name').textContent = data.nome;
        
        // Preenche dados cadastrais
        const profileDataContainer = document.getElementById('modal-profile-data');
        profileDataContainer.innerHTML = `
            <div class="data-item"><strong>Email:</strong> <span>${data.email}</span></div>
            <div class="data-item"><strong>Telefone:</strong> <span>${data.telefone}</span></div>
            <div class="data-item"><strong>Nascimento:</strong> <span>${data.dataNascimento}</span></div>
            <div class="data-item full-width"><strong>Endereço:</strong> <span>${data.endereco}</span></div>
        `;

        // Preenche a tabela de documentos
        const documentsTableBody = document.querySelector('#modal-documents-table tbody');
        documentsTableBody.innerHTML = '';
        if (data.documentos.length > 0) {
            data.documentos.forEach(doc => {
                const row = `
                    <tr>
                        <td><i class="fas fa-file-alt"></i> ${doc.tipo}</td>
                        <td>${doc.data}</td>
                        <td>
                            <a href="${doc.url}" class="action-button primary small" download>
                                <i class="fas fa-download"></i> Baixar
                            </a>
                        </td>
                    </tr>
                `;
                documentsTableBody.innerHTML += row;
            });
        } else {
            documentsTableBody.innerHTML = '<tr><td colspan="3" style="text-align:center;">Nenhum documento encontrado.</td></tr>';
        }
        
        // Ativa a primeira aba por padrão
        document.querySelector('.modal-tab-link[data-tab="dados-cadastrais"]').click();
    }

    // Lógica das abas dentro do modal
    const tabLinks = document.querySelectorAll('.modal-tab-link');
    const tabContents = document.querySelectorAll('.modal-tab-content');

    tabLinks.forEach(link => {
        link.addEventListener('click', () => {
            const tab = link.dataset.tab;

            tabLinks.forEach(l => l.classList.remove('active'));
            link.classList.add('active');

            tabContents.forEach(content => {
                content.style.display = 'none';
                if (content.id === tab) {
                    content.style.display = 'block';
                }
            });
        });
    });
});

</script>

</html>
