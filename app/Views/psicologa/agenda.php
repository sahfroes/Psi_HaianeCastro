<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Agenda - Psi.HaianeCastro</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- CSS do Flatpickr (Biblioteca de Calendário) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- CSS dedicado para esta página -->
    <link rel="stylesheet" href="AgendamentoDoutora.css">
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

/* --- ESTILOS DA PÁGINA DE AGENDAMENTO INTERATIVO --- */
.content-container {
    background-color: var(--card-bg);
    padding: 2rem 2.5rem;
    border-radius: var(--border-radius);
    box-shadow: var(--shadow);
    margin-top: 2rem;
}

.agendamento-layout {
    display: flex;
    gap: 2.5rem;
    flex-wrap: wrap; /* Permite quebrar em telas menores */
}

.calendario-container {
    flex: 1;
    min-width: 300px;
}

.horarios-container {
    flex: 1;
    min-width: 300px;
}

.calendario-container h3,
.horarios-container h3 {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--logo-color);
    margin-bottom: 1.5rem;
}

/* Estilos para customizar o calendário Flatpickr */
.flatpickr-calendar {
    width: 100% !important;
    box-shadow: none !important;
    border: 1px solid #ddd;
}

.flatpickr-day.selected {
    background: var(--primary-color);
    border-color: var(--primary-color);
}

.flatpickr-day:hover {
    background: rgba(13, 110, 253, 0.1);
}

/* Grid de Horários */
.horarios-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
    gap: 1rem;
}

.horarios-placeholder {
    grid-column: 1 / -1; /* Ocupa a linha inteira */
    color: #777;
    font-style: italic;
}

.time-slot-btn {
    padding: 1rem;
    font-family: var(--font-family);
    font-size: 1rem;
    font-weight: 500;
    border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
    text-align: center;
    background-color: #fff;
    transition: all 0.2s ease;
}

.time-slot-btn:hover {
    border-color: var(--primary-color);
    color: var(--primary-color);
}

.time-slot-btn.selected {
    background-color: var(--primary-color);
    color: var(--text-color-light);
    border-color: var(--primary-color);
    font-weight: 600;
}

/* Botão de Confirmação */
.confirmacao-container {
    margin-top: 2rem;
    border-top: 1px solid #eee;
    padding-top: 2rem;
}

#confirmar-agendamento:disabled {
    background-color: #ccc;
    cursor: not-allowed;
}

/* Estilos dos Botões de Ação Genéricos */
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

.action-button.tertiary { 
    background-color: transparent; 
    color: #555; 
}

.action-button.tertiary:hover { 
    background-color: #e9ecef; 
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
            <h1>Minha Agenda</h1>
        </header>

        <div class="content-container">
            <div class="agenda-layout">
                <!-- Coluna da Esquerda: Calendário -->
                <div class="calendario-container">
                    <h3>Calendário de Consultas</h3>
                    <div id="calendario-doutora"></div>
                </div>

                <!-- Coluna da Direita: Detalhes do Dia -->
                <div class="detalhes-dia-container">
                    <h3 id="detalhes-titulo">Agendamentos do Dia</h3>
                    <div id="lista-agendamentos" class="lista-agendamentos">
                        <p class="placeholder-text">Selecione um dia com consultas no calendário para ver os detalhes.</p>
                    </div>
                </div>
            </div>

            <a href="\area_psicologa" class="action-button tertiary" style="margin-top: 2rem;">
                <i class="fas fa-arrow-left"></i> Voltar ao Painel
            </a>
        </div>
    </main>
    
    <!-- JS do Flatpickr (Biblioteca de Calendário) -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
        // 1. Elementos da página da psicóloga
        const calendarioEl = document.getElementById('calendario-doutora'); // ID correto do calendário da psicóloga
        const listaAgendamentosEl = document.getElementById('lista-agendamentos'); // Onde a lista será exibida
        const detalhesTituloEl = document.getElementById('detalhes-titulo');

        // =======================================================
        // FUNÇÃO PARA BUSCAR AGENDAMENTOS (PARA A PSICÓLOGA)
        // =======================================================
        function buscarAgendamentosDoDia(dataStr) {
            detalhesTituloEl.innerText = `Agendamentos para ${dataStr}`;
            listaAgendamentosEl.innerHTML = '<p class="placeholder-text"><i class="fas fa-spinner fa-spin"></i> Carregando consultas...</p>';

            // Chamada GET para o Controller (EndPoint 5: getAgendamentosDoDia)
            fetch(`/agendamento/getAgendamentosDoDia?data=${dataStr}`)
                .then(response => response.json())
                .then(data => {
                    listaAgendamentosEl.innerHTML = ''; // Limpa antes de preencher
                    
                    if (data.status === 'success' && data.agendamentos.length > 0) {
                        data.agendamentos.forEach(agendamento => {
                            const item = document.createElement('div');
                            item.className = 'agendamento-item'; // Use o CSS que você definiu

                            item.innerHTML = `
                                <div>
                                    <i class="far fa-clock"></i> 
                                    <strong>${agendamento.horario}</strong>
                                </div>
                                <div>
                                    <i class="fas fa-user-alt"></i> 
                                    Paciente: ${agendamento.nome_paciente}
                                </div>
                                <small style="color: green;">Status: ${agendamento.status}</small>
                            `;
                            listaAgendamentosEl.appendChild(item);
                        });
                    } else {
                        // Se não houver agendamentos, ou status for 'error'
                        const msg = data.message || 'Nenhum agendamento confirmado para esta data.';
                        listaAgendamentosEl.innerHTML = `<p class="placeholder-text"><i class="fas fa-check-circle"></i> ${msg}</p>`;
                    }
                })
                .catch(error => {
                    console.error('Erro de comunicação:', error);
                    listaAgendamentosEl.innerHTML = '<p class="placeholder-text" style="color: red;"><i class="fas fa-exclamation-triangle"></i> Erro ao carregar agendamentos.</p>';
                });
        }


        // =======================================================
        // 2. INICIALIZAÇÃO DO CALENDÁRIO (FLATPICKR)
        // =======================================================
        const calendario = flatpickr(calendarioEl, {
            inline: true,
            locale: "pt", 
            dateFormat: "d/m/Y",
            
            // Quando a data mudar, chama a função para buscar os agendamentos do dia
            onChange: function(selectedDates, dateStr, instance) {
                if (selectedDates.length > 0) {
                    buscarAgendamentosDoDia(dateStr); 
                }
            },
        });
        
        // Inicializa buscando os agendamentos de hoje ao carregar a página
        const hoje = new Date();
        const dia = String(hoje.getDate()).padStart(2, '0');
        const mes = String(hoje.getMonth() + 1).padStart(2, '0');
        const ano = hoje.getFullYear();
        const hojeStr = `${dia}/${mes}/${ano}`;
        
        // Seleciona a data de hoje no calendário e carrega os agendamentos
        calendario.setDate(hoje);
        buscarAgendamentosDoDia(hojeStr);

    });
</script>

</html>
