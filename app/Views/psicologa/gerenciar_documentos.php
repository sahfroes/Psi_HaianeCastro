<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Documentos - Psi.HaianeCastro</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- CSS dedicado para esta página -->
    <link rel="stylesheet" href="GerenciarDocumentos.css">
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

/* --- ESTILOS DA PÁGINA DE GERENCIAMENTO --- */
.content-container {
    background-color: var(--card-bg);
    padding: 2rem 2.5rem;
    border-radius: var(--border-radius);
    box-shadow: var(--shadow);
    margin-top: 2rem;
}

/* Área de Seleção de Paciente */
.patient-selector-area {
    padding-bottom: 1.5rem;
    margin-bottom: 1.5rem;
    border-bottom: 1px solid #eee;
}

.patient-selector-area label {
    font-size: 1.2rem;
    font-weight: 500;
    margin-right: 1rem;
}

#patient-select {
    padding: 10px;
    font-size: 1.1rem;
    border-radius: 8px;
    border: 1px solid #ccc;
    min-width: 300px;
}

/* Área de Upload */
.upload-area {
    background-color: #f8f9fa;
    padding: 1.5rem;
    border-radius: 8px;
    margin-bottom: 2rem;
}

.upload-area h3 {
    font-size: 1.3rem;
    color: var(--logo-color);
    margin-bottom: 1rem;
}

.upload-form {
    display: flex;
    gap: 1.5rem;
    align-items: flex-end;
    flex-wrap: wrap;
}

.form-group {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
    flex-grow: 1;
}

.form-group label {
    font-weight: 500;
}

.form-group select,
.form-group input {
    padding: 10px;
    font-size: 1rem;
    border-radius: 8px;
    border: 1px solid #ccc;
}

/* Área de Exibição de Documentos */
.documents-display-area h3 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
}

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
</style>


<body>
    <div class="background-flowers"></div>

    <main class="container">
        <header class="header">
            <div class="logo">
                <img src="Fotos/logo.png" alt="Logo" class="logo-img">
                <span>Haiane Castro</span>
            </div>
            <h1>Gerenciar Documentos</h1>
        </header>

        <div class="content-container">
            <!-- Área de Seleção de Paciente -->
            <div class="patient-selector-area">
                <label for="patient-select">Selecione um Paciente:</label>
                <select id="patient-select">
                    <option value="">-- Escolha um paciente --</option>
                    <!-- Opções serão preenchidas via JS -->
                </select>
            </div>

            <!-- Área de Upload de Documentos -->
            <div id="upload-area" class="upload-area" style="display: none;">
                <h3><i class="fas fa-upload"></i> Enviar Novo Documento</h3>
                <form id="upload-form" class="upload-form">
                    <div class="form-group">
                        <label for="doc-type">Tipo de Documento</label>
                        <select id="doc-type" required>
                            <option value="Receita Médica">Receita Médica</option>
                            <option value="Encaminhamento">Encaminhamento</option>
                            <option value="Atestado">Atestado</option>
                            <option value="Relatório">Relatório</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="doc-file">Arquivo</label>
                        <input type="file" id="doc-file" required>
                    </div>
                    <button type="submit" class="action-button primary">
                        <i class="fas fa-paper-plane"></i> Enviar Documento
                    </button>
                </form>
            </div>

            <!-- Área de Exibição dos Documentos -->
            <div id="documents-display-area" class="documents-display-area" style="display: none;">
                <h3 id="documents-title">Documentos do Paciente</h3>
                <div class="table-responsive">
                    <table class="documents-table">
                        <thead>
                            <tr>
                                <th>Tipo de Documento</th>
                                <th>Data de Envio</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody id="documents-table-body">
                            <!-- Linhas da tabela serão preenchidas via JS -->
                        </tbody>
                    </table>
                </div>
            </div>
             <a href="\area_psicologa" class="action-button tertiary" style="margin-top: 2rem;">
                <i class="fas fa-arrow-left"></i> Voltar ao Painel
            </a>
        </div>
    </main>
    
    <script src="GerenciarDocumentos.js"></script>
</body>

<script>

    document.addEventListener('DOMContentLoaded', function() {

    // --- DADOS DE EXEMPLO (Simula um banco de dados) ---
    const patientDocs = {
        'joao_silva': {
            nome: "João Silva",
            documentos: [
                { tipo: "Receita Médica", data: "15/07/2025", url: "#" },
                { tipo: "Encaminhamento", data: "15/07/2025", url: "#" }
            ]
        },
        'maria_oliveira': {
            nome: "Maria Oliveira",
            documentos: [
                { tipo: "Atestado", data: "18/07/2025", url: "#" }
            ]
        },
        'carlos_souza': {
            nome: "Carlos Souza",
            documentos: []
        }
    };
    // ----------------------------------------------------

    const patientSelect = document.getElementById('patient-select');
    const uploadArea = document.getElementById('upload-area');
    const documentsDisplayArea = document.getElementById('documents-display-area');
    const documentsTitle = document.getElementById('documents-title');
    const documentsTableBody = document.getElementById('documents-table-body');
    const uploadForm = document.getElementById('upload-form');
    const docFileInput = document.getElementById('doc-file');
    const docTypeInput = document.getElementById('doc-type');

    // 1. Popula o seletor de pacientes
    for (const id in patientDocs) {
        const option = document.createElement('option');
        option.value = id;
        option.textContent = patientDocs[id].nome;
        patientSelect.appendChild(option);
    }

    // 2. Evento de mudança no seletor de pacientes
    patientSelect.addEventListener('change', function() {
        const selectedPatientId = this.value;
        if (selectedPatientId) {
            const patient = patientDocs[selectedPatientId];
            displayPatientInfo(patient);
            uploadArea.style.display = 'block';
            documentsDisplayArea.style.display = 'block';
        } else {
            uploadArea.style.display = 'none';
            documentsDisplayArea.style.display = 'none';
        }
    });

    // 3. Função para exibir os documentos do paciente
    function displayPatientInfo(patient) {
        documentsTitle.textContent = `Documentos de ${patient.nome}`;
        documentsTableBody.innerHTML = ''; // Limpa a tabela

        if (patient.documentos.length > 0) {
            patient.documentos.forEach(doc => {
                addDocumentToTable(doc);
            });
        } else {
            documentsTableBody.innerHTML = '<tr><td colspan="3" style="text-align:center;">Nenhum documento encontrado para este paciente.</td></tr>';
        }
    }
    
    // 4. Função para adicionar uma linha na tabela de documentos
    function addDocumentToTable(doc) {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td><i class="fas fa-file-alt"></i> ${doc.tipo}</td>
            <td>${doc.data}</td>
            <td>
                <a href="${doc.url}" class="action-button primary small" download>
                    <i class="fas fa-download"></i> Baixar
                </a>
            </td>
        `;
        documentsTableBody.appendChild(row);
    }

    // 5. Evento de envio do formulário de upload
    uploadForm.addEventListener('submit', function(event) {
        event.preventDefault();
        
        const selectedPatientId = patientSelect.value;
        const file = docFileInput.files[0];
        const docType = docTypeInput.value;

        if (!selectedPatientId) {
            alert("Por favor, selecione um paciente primeiro.");
            return;
        }
        if (!file) {
            alert("Por favor, selecione um arquivo para enviar.");
            return;
        }

        // Simula o upload
        alert(`Documento "${file.name}" (${docType}) enviado com sucesso para ${patientDocs[selectedPatientId].nome}!`);

        // Adiciona o novo documento aos dados e à tabela (simulação)
        const today = new Date();
        const newDoc = {
            tipo: docType,
            data: today.toLocaleDateString('pt-BR'),
            url: "#" // Em um cenário real, seria a URL do arquivo salvo
        };
        patientDocs[selectedPatientId].documentos.push(newDoc);
        
        // Limpa e reexibe os documentos
        displayPatientInfo(patientDocs[selectedPatientId]);
        
        // Reseta o formulário
        uploadForm.reset();
    });
});

</script>
</html>
