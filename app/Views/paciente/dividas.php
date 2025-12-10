<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Pagamentos - Psi.HaianeCastro</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Apontando para o arquivo CSS dedicado desta página -->
    <link rel="stylesheet" href="Pagamentos.css">
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

a { text-decoration: none; }

/* --- ESTRUTURA PRINCIPAL DA PÁGINA --- */
.container { width: 100%; max-width: 950px; z-index: 1; }
.header { margin-bottom: 2rem; color: #444; }
.header .logo { display: flex; align-items: center; gap: 0.75rem; font-weight: 500; font-size: 1.1rem; color: var(--logo-color); }
.logo-img { height: 35px; width: auto; }
.header h1 { font-size: 2.5rem; font-weight: 600; margin-top: 0.5rem; }

/* --- ESTILOS DA PÁGINA DE PAGAMENTOS --- */
.content-container {
    background-color: var(--card-bg);
    padding: 2rem 2.5rem;
    border-radius: var(--border-radius);
    box-shadow: var(--shadow);
    margin-top: 2rem;
}

.table-responsive {
    width: 100%;
    overflow-x: auto; 
}

.payments-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 1rem;
}

.payments-table th, 
.payments-table td {
    padding: 1.2rem 1.5rem; 
    text-align: left;
    border-bottom: 1px solid #dee2e6;
    vertical-align: middle;
}

.payments-table th {
    background-color: #f8f9fa;
    font-weight: 600;
    color: #343a40;
}

.payments-table tbody tr:hover {
    background-color: #f1f1f1;
}

/* Estilos dos Status de Pagamento */
.payment-status {
    padding: 0.4rem 0.8rem;
    border-radius: 20px;
    font-weight: 600;
    color: #fff;
    font-size: 0.9rem;
    white-space: nowrap;
}
.status-pago { background-color: var(--status-pago); }
.status-pendente { background-color: var(--status-pendente); }
.status-aguardando { background-color: var(--status-aguardando); color: #333; }

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
    white-space: nowrap;
}
.action-button:disabled {
    cursor: not-allowed;
    opacity: 0.7;
}
.action-button.primary { background-color: var(--primary-color); color: var(--text-color-light); }
.action-button.primary:hover:not(:disabled) { background-color: var(--secondary-color); }
.action-button.secondary { background-color: #6c757d; color: var(--text-color-light); }
.action-button.tertiary { background-color: transparent; color: #555; }
.action-button.tertiary:hover:not(:disabled) { background-color: #e9ecef; }
</style>

<body>
    <div class="background-flowers"></div>

    <main class="container">
        <header class="header">
            <div class="logo">
                <img src="Fotos/logo.png" alt="Logo" class="logo-img">
                <!-- Nome corrigido -->
                <span>Haiane Castro</span>
            </div>
            <h1>Meus Pagamentos</h1>
        </header>

        <div class="content-container">
            <p style="margin-bottom: 2rem; font-size: 1.1rem; color: #555;">
                Acompanhe o status das suas sessões e anexe os comprovantes de pagamento.
            </p>

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
                    <tbody>
                        <!-- Exemplo de pagamento PENDENTE -->
                        <tr class="payment-row">
                            <td>Sessão de 25/07/2025</td>
                            <td>R$ 150,00</td>
                            <td><span class="payment-status status-pendente">Pendente</span></td>
                            <td class="action-cell">
                                <button class="action-button primary small upload-btn">
                                    <i class="fas fa-paperclip"></i> Anexar Comprovante
                                </button>
                                <!-- Campo de upload escondido -->
                                <input type="file" class="file-input" style="display: none;">
                            </td>
                        </tr>
                        <!-- Exemplo de pagamento PAGO -->
                        <tr class="payment-row">
                            <td>Sessão de 18/07/2025</td>
                            <td>R$ 150,00</td>
                            <td><span class="payment-status status-pago">Pago</span></td>
                            <td class="action-cell">
                                <button class="action-button tertiary small" disabled>
                                    <i class="fas fa-check-circle"></i> Finalizado
                                </button>
                            </td>
                        </tr>
                        <!-- Exemplo de pagamento AGUARDANDO CONFIRMAÇÃO -->
                         <tr class="payment-row">
                            <td>Sessão de 11/07/2025</td>
                            <td>R$ 150,00</td>
                            <td><span class="payment-status status-aguardando">Aguardando Confirmação</span></td>
                            <td class="action-cell">
                                <button class="action-button secondary small" disabled>
                                    <i class="fas fa-hourglass-half"></i> Enviado
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

             <a href="\area_paciente" class="action-button tertiary" style="margin-top: 2rem;">
                <i class="fas fa-arrow-left"></i> Voltar ao Painel
            </a>
        </div>
    </main>

    <script src="pagamentos.js"></script>
</body>

<script>
    document.addEventListener('DOMContentLoaded', function() {

    // Seleciona todos os botões de upload da página
    const uploadButtons = document.querySelectorAll('.upload-btn');

    uploadButtons.forEach(button => {
        // Para cada botão, encontra o input de arquivo correspondente na mesma linha da tabela
        const row = button.closest('.payment-row');
        const fileInput = row.querySelector('.file-input');
        
        // Adiciona o evento de clique ao BOTÃO
        button.addEventListener('click', () => {
            // Quando o botão é clicado, ele aciona o clique no INPUT escondido
            fileInput.click();
        });

        // Adiciona o evento de 'change' ao INPUT
        fileInput.addEventListener('change', function() {
            // Verifica se um arquivo foi realmente selecionado
            if (this.files && this.files.length > 0) {
                const fileName = this.files[0].name;
                
                // Simula o sucesso do envio
                alert(`Comprovante "${fileName}" anexado com sucesso! O status será atualizado após a confirmação.`);

                // Atualiza a interface para refletir o envio
                const statusCell = row.querySelector('.payment-status');
                const actionCell = row.querySelector('.action-cell');

                // Muda o status para "Aguardando Confirmação"
                statusCell.textContent = 'Aguardando Confirmação';
                statusCell.className = 'payment-status status-aguardando';

                // Desabilita o botão e muda o texto/ícone
                actionCell.innerHTML = `
                    <button class="action-button secondary small" disabled>
                        <i class="fas fa-hourglass-half"></i> Enviado
                    </button>
                `;
            }
        });
    });

});
</script>

</html>