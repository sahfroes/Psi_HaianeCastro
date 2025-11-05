<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Senha - Psi.HaianeCastro</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="login.css">

    <link rel="icon" type="image/png" href="fotos/sua-logo.png">
</head>
<body>
    <div class="background-flowers"></div>

    <div class="login-page-container">
        <div class="login-card">
            <div class="logo">
                <img src="MinhaArea/Fotos/logo02.png" alt="Logo">
            </div>

            <div class="avatar">
                <span class="material-icons">lock_reset</span>
            </div>
            
            <form id="esqueceuSenhaForm">
                <p style="margin-bottom: 1.5rem; color: #555;">
                    Perdeu sua senha? Por favor, digite seu endereço de e-mail. Você receberá um link para criar uma nova senha.
                </p>

                <div class="input-group">
                    <label for="email">Seu E-mail de Cadastro</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <button type="submit" class="login-button">Redefinir Senha</button>
            </form>
            
            <div class="extra-links" style="justify-content: center;">
                <a href="login.php">Voltar para o Login</a>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const esqueceuSenhaForm = document.getElementById('esqueceuSenhaForm');
    const emailInput = document.getElementById('email');

    esqueceuSenhaForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Impede o envio do formulário

        const email = emailInput.value.trim();

        // 1. Valida se o campo de e-mail está preenchido
        if (email === '') {
            alert('Por favor, digite seu endereço de e-mail.');
            return;
        }

        // 2. Valida o formato do e-mail
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert('Por favor, insira um e-mail com formato válido.');
            return;
        }

        // 3. Simula o envio e exibe a mensagem de confirmação
        // (Em um projeto real, aqui seria enviado o e-mail para o servidor)
        alert('Se houver uma conta associada a este e-mail, um link para redefinição de senha foi enviado. Por favor, verifique sua caixa de entrada e spam.');

        // 4. Redireciona de volta para a página de login após alguns segundos
        setTimeout(function() {
            window.location.href = 'login.php';
        }, 3000); // 3000 milissegundos = 3 segundos
    });
});
    </script>
</body>
</html>