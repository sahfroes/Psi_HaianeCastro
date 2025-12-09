<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Financeiro - Psi.HaianeCastro</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- CSS dedicado para esta página -->
    <link rel="stylesheet" href="Financeiro.css">
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
    --status-pago: #28a745;
    --status-pendente: #dc3545;
    --status-aguardando: #ffc107;
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

/* --- ESTILOS DA PÁGINA DE GERENCIAMENTO FINANCEIRO --- */
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

/* Área de Exibição de Pagamentos */
.payments-display-area h3 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
}

.table-responsive {
    width: 100%;
    overflow-x: auto;
}

.payments-table {
    width: 100%;
    border-collapse: collapse;
}

.payments-table th,
.payments-table td {
    padding: 1rem;
    text-align: left;
    border-bottom: 1px solid #dee2e6;
    vertical-align: middle;
}

.payments-table th {
    background-color: #f8f9fa;
}

.payments-table tbody tr:hover {
    background-color: #f1f1f1;
}

/* Status de Pagamento */
.payment-status {
    padding: 0.4rem 0.8rem;
    border-radius: 20px;
    font-weight: 600;
    color: #fff;
    font-size: 0.9rem;
    white-space: nowrap;
}

.status-pago {
    background-color: var(--status-pago);
}

.status-pendente {
    background-color: var(--status-pendente);
}

.status-aguardando {
    background-color: var(--status-aguardando);
    color: #333;
}

/* Botões de Ação */
.action-cell {
    display: flex;
    gap: 0.5rem;
    flex-wrap: wrap;
}

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
    white-space: nowrap;
}

.action-button:disabled {
    cursor: not-allowed;
    opacity: 0.7;
}

.action-button.primary {
    background-color: var(--primary-color);
    color: var(--text-color-light);
}

.action-button.primary:hover:not(:disabled) {
    background-color: var(--secondary-color);
}

.action-button.secondary {
    background-color: #6c757d;
    color: var(--text-color-light);
}

.action-button.tertiary {
    background-color: transparent;
    color: #555;
}

.action-button.pago {
    background-color: var(--status-pago);
    color: white;
}

/* MODAL DE COMPROVANTE */
.modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 1000;
    animation: fadeInModal 0.3s;
}

.modal-content {
    background-color: #fff;
    padding: 2rem;
    border-radius: var(--border-radius);
    position: relative;
    max-width: 90%;
    max-height: 90vh;
}

.close-modal-btn {
    position: absolute;
    top: 10px;
    right: 15px;
    background: transparent;
    border: none;
    font-size: 2rem;
    color: #555;
    cursor: pointer;
}

.modal-content h2 {
    margin-bottom: 1.5rem;
    text-align: center;
}

#receipt-image {
    max-width: 100%;
    max-height: 70vh;
    display: block;
    margin: auto;
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
            <h1>Gerenciar Financeiro</h1>
        </header>

        <div class="content-container">
            <!-- Área de Seleção de Paciente -->
            <div class="patient-selector-area">
                <label for="patient-select">Selecione um Paciente:</label>
                <select id="patient-select">
                    <option value="">-- Escolha um paciente para ver os pagamentos --</option>
                    <!-- Opções serão preenchidas via JS -->
                </select>
            </div>

            <!-- Área de Exibição dos Pagamentos -->
            <div id="payments-display-area" class="payments-display-area" style="display: none;">
                <h3 id="payments-title">Pagamentos do Paciente</h3>
                <div class="table-responsive">
                    <table class="payments-table">
                        <thead>
                            <tr>
                                <th>Sessão (Data)</th>
                                <th>Valor</th>
                                <th>Status</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody id="payments-table-body">
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
    
    <!-- MODAL PARA VER O COMPROVANTE -->
    <div id="receipt-modal" class="modal-overlay">
        <div class="modal-content">
            <button id="close-modal-btn" class="close-modal-btn"><i class="fas fa-times"></i></button>
            <h2>Comprovante de Pagamento</h2>
            <img id="receipt-image" src="" alt="Comprovante de Pagamento">
        </div>
    </div>

    <script src="Financeiro.js"></script>
</body>

<script>
    document.addEventListener('DOMContentLoaded', function() {

    // --- DADOS DE EXEMPLO (Simula um banco de dados) ---
    const financeData = {
        'joao_silva': {
            nome: "João Silva",
            pagamentos: [
                { id: 'p1', sessao: "25/07/2025", valor: "150,00", status: "Pendente", comprovante: null },
                { id: 'p2', sessao: "18/07/2025", valor: "150,00", status: "Pago", comprovante: null }
            ]
        },
        'maria_oliveira': {
            nome: "Maria Oliveira",
            pagamentos: [
                { id: 'p3', sessao: "22/07/2025", valor: "150,00", status: "Aguardando Confirmação", comprovante: "https://placehold.co/600x800/eee/31343C?text=Comprovante" },
                { id: 'p4', sessao: "15/07/2025", valor: "150,00", status: "Pago", comprovante: null }
            ]
        },
        'carlos_souza': {
            nome: "Carlos Souza",
            pagamentos: [
                { id: 'p5', sessao: "20/07/2025", valor: "150,00", status: "Pendente", comprovante: null }
            ]
        }
    };
    // ----------------------------------------------------

    const patientSelect = document.getElementById('patient-select');
    const paymentsDisplayArea = document.getElementById('payments-display-area');
    const paymentsTitle = document.getElementById('payments-title');
    const paymentsTableBody = document.getElementById('payments-table-body');
    const modal = document.getElementById('receipt-modal');
    const closeModalBtn = document.getElementById('close-modal-btn');
    const receiptImage = document.getElementById('receipt-image');

    // 1. Popula o seletor de pacientes
    for (const id in financeData) {
        const option = document.createElement('option');
        option.value = id;
        option.textContent = financeData[id].nome;
        patientSelect.appendChild(option);
    }

    // 2. Evento de mudança no seletor de pacientes
    patientSelect.addEventListener('change', function() {
        const selectedPatientId = this.value;
        if (selectedPatientId) {
            const patient = financeData[selectedPatientId];
            displayPatientPayments(patient);
            paymentsDisplayArea.style.display = 'block';
        } else {
            paymentsDisplayArea.style.display = 'none';
        }
    });

    // 3. Função para exibir os pagamentos do paciente na tabela
    function displayPatientPayments(patient) {
        paymentsTitle.textContent = `Pagamentos de ${patient.nome}`;
        paymentsTableBody.innerHTML = ''; // Limpa a tabela

        if (patient.pagamentos.length > 0) {
            patient.pagamentos.forEach(pag => {
                const row = document.createElement('tr');
                row.dataset.paymentId = pag.id;
                
                let statusClass = '';
                if (pag.status === 'Pago') statusClass = 'status-pago';
                else if (pag.status === 'Pendente') statusClass = 'status-pendente';
                else if (pag.status === 'Aguardando Confirmação') statusClass = 'status-aguardando';

                let actionsHtml = '';
                if (pag.status === 'Pendente') {
                    actionsHtml = `<button class="action-button tertiary small" disabled>Aguardando Paciente</button>`;
                } else if (pag.status === 'Aguardando Confirmação') {
                    actionsHtml = `
                        <button class="action-button secondary small view-receipt-btn"><i class="fas fa-receipt"></i> Ver Comprovante</button>
                        <button class="action-button primary small confirm-payment-btn"><i class="fas fa-check"></i> Confirmar</button>
                    `;
                } else if (pag.status === 'Pago') {
                    actionsHtml = `<button class="action-button pago small" disabled><i class="fas fa-check-circle"></i> Finalizado</button>`;
                }
                
                row.innerHTML = `
                    <td>Sessão de ${pag.sessao}</td>
                    <td>R$ ${pag.valor}</td>
                    <td><span class="payment-status ${statusClass}">${pag.status}</span></td>
                    <td class="action-cell">${actionsHtml}</td>
                `;
                paymentsTableBody.appendChild(row);
            });
        } else {
            paymentsTableBody.innerHTML = '<tr><td colspan="4" style="text-align:center;">Nenhum registro de pagamento encontrado.</td></tr>';
        }
    }
    
    // 4. Lógica de Ações na Tabela (usando delegação de eventos)
    paymentsTableBody.addEventListener('click', function(event) {
        const target = event.target.closest('button');
        if (!target) return;

        const row = target.closest('tr');
        const paymentId = row.dataset.paymentId;
        const patientId = patientSelect.value;
        const payment = financeData[patientId].pagamentos.find(p => p.id === paymentId);

        // Ação: Ver Comprovante
        if (target.classList.contains('view-receipt-btn')) {
            if (payment.comprovante) {
                receiptImage.src = payment.comprovante;
                modal.style.display = 'flex';
            } else {
                alert("Nenhum comprovante disponível.");
            }
        }

        // Ação: Confirmar Pagamento
        if (target.classList.contains('confirm-payment-btn')) {
            if (confirm("Deseja confirmar o pagamento desta sessão?")) {
                payment.status = 'Pago';
                displayPatientPayments(financeData[patientId]); // Re-renderiza a tabela
            }
        }
    });

    // 5. Lógica para fechar o modal
    closeModalBtn.addEventListener('click', () => modal.style.display = 'none');
    window.addEventListener('click', (event) => {
        if (event.target === modal) modal.style.display = 'none';
    });
});

</script>
</html>
