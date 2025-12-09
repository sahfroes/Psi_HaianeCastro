<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefas Pendentes - Psi.HaianeCastro</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- CSS dedicado para esta página -->
    <link rel="stylesheet" href="Lembretes.css">
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
    --success-color: #28a745;
    --danger-color: #dc3545;
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

/* --- ESTILOS DA PÁGINA DE TAREFAS --- */
.content-container {
    background-color: var(--card-bg);
    padding: 2rem 2.5rem;
    border-radius: var(--border-radius);
    box-shadow: var(--shadow);
    margin-top: 2rem;
}

/* Formulário de Input */
.task-input-form {
    display: flex;
    gap: 1rem;
    margin-bottom: 2rem;
}
#task-input {
    flex-grow: 1;
    padding: 12px 15px;
    font-size: 1.1rem;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-family: var(--font-family);
}
#task-input:focus {
    outline: none;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.2);
}

/* Lista de Tarefas */
.task-list-container h3 {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--logo-color);
    margin-bottom: 1rem;
    padding-bottom: 1rem;
    border-bottom: 1px solid #eee;
}
.task-list {
    list-style-type: none;
    max-height: 400px;
    overflow-y: auto;
}
.placeholder-task {
    color: #777;
    font-style: italic;
    padding: 2rem 0;
    text-align: center;
}
.task-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem;
    background-color: #fff;
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    margin-bottom: 0.75rem;
    transition: background-color 0.3s ease;
    animation: fadeIn 0.4s ease-in-out;
}
.task-item.completed {
    background-color: #f7f7f7;
}
.task-item.completed .task-text {
    text-decoration: line-through;
    color: #888;
}
.task-text {
    font-size: 1.1rem;
}
.task-actions {
    display: flex;
    gap: 0.5rem;
}
.icon-button {
    background: transparent;
    border: none;
    font-size: 1.2rem;
    cursor: pointer;
    padding: 5px;
    width: 35px;
    height: 35px;
    border-radius: 50%;
    transition: background-color 0.2s ease;
}
.icon-button.complete-btn { color: var(--success-color); }
.icon-button.complete-btn:hover { background-color: rgba(40, 167, 69, 0.1); }
.icon-button.delete-btn { color: var(--danger-color); }
.icon-button.delete-btn:hover { background-color: rgba(220, 53, 69, 0.1); }

/* Botões de Ação Genéricos */
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
.action-button.primary { background-color: var(--primary-color); color: var(--text-color-light); }
.action-button.primary:hover { background-color: var(--secondary-color); }
.action-button.tertiary { background-color: transparent; color: #555; }
.action-button.tertiary:hover { background-color: #e9ecef; }

/* Animações */
@keyframes fadeIn { from { opacity: 0; transform: translateY(-10px); } to { opacity: 1; transform: translateY(0); } }
@keyframes fadeOut { from { opacity: 1; } to { opacity: 0; transform: scale(0.9); } }

</style>


<body>
    <div class="background-flowers"></div>

    <main class="container">
        <header class="header">
            <div class="logo">
                <img src="Fotos/logo.png" alt="Logo" class="logo-img">
                <span>Haiane Castro</span>
            </div>
            <h1>Lembretes e Tarefas</h1>
        </header>

        <div class="content-container">
            <!-- Formulário para adicionar nova tarefa -->
            <form id="task-form" class="task-input-form">
                <input type="text" id="task-input" placeholder="Digite uma nova tarefa..." autocomplete="off">
                <button type="submit" class="action-button primary">
                    <i class="fas fa-plus"></i> Adicionar
                </button>
            </form>

            <!-- Lista de Tarefas -->
            <div class="task-list-container">
                <h3>Minhas Tarefas</h3>
                <ul id="task-list" class="task-list">
                    <!-- Tarefas serão adicionadas aqui via JavaScript -->
                    <li class="placeholder-task">Você ainda não tem tarefas.</li>
                </ul>
            </div>

            <a href="\area_psicologa" class="action-button tertiary" style="margin-top: 2rem;">
                <i class="fas fa-arrow-left"></i> Voltar ao Painel
            </a>
        </div>
    </main>
    
    <script src="Lembretes.js"></script>
</body>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    
    const taskForm = document.getElementById('task-form');
    const taskInput = document.getElementById('task-input');
    const taskList = document.getElementById('task-list');
    const placeholder = document.querySelector('.placeholder-task');

    // Carrega tarefas salvas do localStorage
    loadTasks();

    taskForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const taskText = taskInput.value.trim();

        if (taskText !== '') {
            addTask(taskText);
            saveTasks();
            taskInput.value = '';
            taskInput.focus();
        }
    });

    taskList.addEventListener('click', function(event) {
        const target = event.target;
        
        // Marcar como concluída
        if (target.classList.contains('complete-btn')) {
            const taskItem = target.closest('li');
            taskItem.classList.toggle('completed');
            saveTasks();
        }

        // Remover tarefa
        if (target.classList.contains('delete-btn')) {
            const taskItem = target.closest('li');
            taskItem.style.animation = 'fadeOut 0.3s forwards';
            setTimeout(() => {
                taskItem.remove();
                saveTasks();
                checkIfEmpty();
            }, 300);
        }
    });

    function addTask(text, isCompleted = false) {
        if (placeholder) {
            placeholder.style.display = 'none';
        }

        const li = document.createElement('li');
        li.className = 'task-item';
        if (isCompleted) {
            li.classList.add('completed');
        }

        li.innerHTML = `
            <span class="task-text">${text}</span>
            <div class="task-actions">
                <button class="icon-button complete-btn">
                    <i class="fas fa-check"></i>
                </button>
                <button class="icon-button delete-btn">
                    <i class="fas fa-trash"></i>
                </button>
            </div>
        `;
        taskList.appendChild(li);
    }
    
    function saveTasks() {
        const tasks = [];
        const taskItems = taskList.querySelectorAll('.task-item');
        taskItems.forEach(item => {
            tasks.push({
                text: item.querySelector('.task-text').textContent,
                completed: item.classList.contains('completed')
            });
        });
        localStorage.setItem('tasks', JSON.stringify(tasks));
    }

    function loadTasks() {
        const tasks = JSON.parse(localStorage.getItem('tasks'));
        if (tasks && tasks.length > 0) {
            tasks.forEach(task => addTask(task.text, task.completed));
        }
        checkIfEmpty();
    }
    
    function checkIfEmpty() {
        if (taskList.children.length === 1 && placeholder) { // Apenas o placeholder
             placeholder.style.display = 'block';
        }
    }
});

</script>

</html>
