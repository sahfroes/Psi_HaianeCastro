<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento de Sessão - Psi.HaianeCastro</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <link rel="stylesheet" href="AgendamentoCliente.css">
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
            <h1>Agendar Sessão</h1>
        </header>

        <div class="content-container">
            <div class="agendamento-layout">
                <div class="calendario-container">
                    <h3>1. Selecione uma data</h3>
                    <div id="calendario-agendamento"></div>
                </div>

                <div class="horarios-container">
                    <h3 id="horarios-titulo">2. Escolha um horário</h3>
                    <div id="horarios-grid" class="horarios-grid">
                        <p class="horarios-placeholder">Selecione uma data no calendário para ver os horários disponíveis.</p>
                    </div>
                    <div class="confirmacao-container">
                        <button id="confirmar-agendamento" class="action-button primary" disabled>
                            Confirmar Agendamento
                        </button>
                    </div>
                </div>
            </div>

            <a href="\area_paciente" class="action-button tertiary" style="margin-top: 2rem;">
                <i class="fas fa-arrow-left"></i> Voltar ao Painel
            </a>
        </div>
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/pt.js"></script>
    <script src="AgendamentoCliente.js"></script>
</body>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    
    // Elementos da página
    const calendarioEl = document.getElementById('calendario-agendamento');
    const horariosGridEl = document.getElementById('horarios-grid');
    const horariosTituloEl = document.getElementById('horarios-titulo');
    const confirmarBtn = document.getElementById('confirmar-agendamento');

    let dataSelecionada = null;
    let horarioSelecionado = null;

    // Horários disponíveis FAKES (para simulação)
    const horariosDisponiveis = {
        'weekday': ["09:00", "10:00", "11:00", "14:00", "15:00", "16:00"], // Seg a Sex
        'saturday': ["09:00", "10:00", "11:00"], // Sábado
        'sunday': [] // Domingo sem horários
    };

    // 1. INICIALIZAÇÃO DO CALENDÁRIO (FLATPICKR)
    const calendario = flatpickr(calendarioEl, {
        inline: true, // Mostra o calendário diretamente na página
        minDate: "today", // Não permite selecionar datas passadas
        locale: "pt", // Traduz para português
        dateFormat: "d/m/Y",
        
        // Função que é executada toda vez que uma data é selecionada
        onChange: function(selectedDates, dateStr, instance) {
            dataSelecionada = dateStr;
            horarioSelecionado = null; // Reseta o horário ao mudar a data
            confirmarBtn.disabled = true; // Desabilita o botão de confirmar

            const diaDaSemana = selectedDates[0].getDay(); // 0 = Domingo, 1 = Segunda, ..., 6 = Sábado
            
            let horarios = [];
            if (diaDaSemana === 0) { // Domingo
                horarios = horariosDisponiveis.sunday;
            } else if (diaDaSemana === 6) { // Sábado
                horarios = horariosDisponiveis.saturday;
            } else { // Dias de semana
                horarios = horariosDisponiveis.weekday;
            }

            atualizarHorarios(horarios, dateStr);
        },
    });

    // 2. FUNÇÃO PARA ATUALIZAR OS HORÁRIOS NA TELA
    function atualizarHorarios(horarios, dataFormatada) {
        horariosTituloEl.innerText = `2. Horários para ${dataFormatada}`;
        horariosGridEl.innerHTML = ''; // Limpa os horários antigos

        if (horarios.length === 0) {
            horariosGridEl.innerHTML = '<p class="horarios-placeholder">Não há horários disponíveis para esta data.</p>';
            return;
        }

        horarios.forEach(horario => {
            const btn = document.createElement('button');
            btn.className = 'time-slot-btn';
            btn.textContent = horario;
            btn.dataset.horario = horario;
            horariosGridEl.appendChild(btn);
        });
    }

    // 3. LÓGICA DE CLIQUE NOS HORÁRIOS
    horariosGridEl.addEventListener('click', function(event) {
        // Remove a seleção de qualquer outro botão
        const todosBotoes = horariosGridEl.querySelectorAll('.time-slot-btn');
        todosBotoes.forEach(btn => btn.classList.remove('selected'));

        // Se o clique foi em um botão de horário
        if (event.target.classList.contains('time-slot-btn')) {
            const btnClicado = event.target;
            btnClicado.classList.add('selected');
            horarioSelecionado = btnClicado.dataset.horario;
            confirmarBtn.disabled = false; // Habilita o botão de confirmar
        }
    });

    // 4. LÓGICA DO BOTÃO DE CONFIRMAÇÃO
    confirmarBtn.addEventListener('click', function() {
        if (dataSelecionada && horarioSelecionado) {
            alert(`Agendamento confirmado com sucesso!\n\nData: ${dataSelecionada}\nHorário: ${horarioSelecionado}\n\nProfissional: Haiane Castro`);
            
            // Aqui você poderia redirecionar ou limpar a seleção
            calendario.clear();
            horariosGridEl.innerHTML = '<p class="horarios-placeholder">Selecione uma data no calendário para ver os horários disponíveis.</p>';
            horariosTituloEl.innerText = `2. Escolha um horário`;
            confirmarBtn.disabled = true;
        } else {
            alert("Por favor, selecione uma data e um horário.");
        }
    });
});
</script>

</html>