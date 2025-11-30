<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Psi.HaianeCastro</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <link rel="icon" type="image/png" href="<?= base_url('fotos/logo.png') ?>">

    <style>
        /* --- (Seu CSS completo vem aqui) --- */
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
        a { color: var(--primary-color); text-decoration: none; }
        a:hover { text-decoration: underline; }
        .login-page-container { width: 100%; max-width: 420px; }
        .login-card {
            background-color: var(--card-bg);
            padding: 40px 30px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            text-align: center;
            position: relative;
        }
        .login-card .logo img { max-width: 150px; margin-bottom: 20px; }
        .login-card .avatar {
            background-color: var(--primary-color);
            border-radius: 50%;
            width: 70px; height: 70px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: -55px auto 20px auto;
            border: 4px solid var(--body-bg-color);
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }
        .login-card .avatar .material-icons { color: var(--text-color-light); font-size: 38px; }
        .input-group { margin-bottom: 1rem; text-align: left; }
        .input-group label { display: block; margin-bottom: 5px; font-size: 0.9rem; font-weight: 500; color: #555; }
        .input-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            font-family: var(--font-family);
        }
        .login-button {
            background-color: var(--primary-color);
            color: var(--text-color-light);
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .login-button:hover { background-color: var(--secondary-color); }
        .extra-links {
            margin-top: 1.5rem;
            font-size: 0.9rem;
            display: flex;
            justify-content: space-between;
        }
        .profile-selector-group { text-align: left; margin-bottom: 1.5rem; }
        .profile-selector-group .group-label { display: block; margin-bottom: 8px; font-size: 0.9rem; font-weight: 500; color: #555; }
        .profile-options { display: flex; justify-content: flex-start; gap: 25px; }
        .profile-option { display: flex; align-items: center; gap: 6px; }
        .profile-option label { font-size: 0.9rem; color: #333; }
        
        /* ESTILO "BONITO" PARA OS ERROS DO CODEIGNITER */
        .errors {
            background: #ffebee; /* Vermelho claro */
            color: #b71c1c; /* Vermelho escuro */
            border: 1px solid #b71c1c;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 1rem;
            text-align: left;
        }
        .errors ul {
            list-style-position: inside;
            padding-left: 0;
        }
    </style>
</head>
<body>
    <div class="background-flowers"></div>

    <div class="login-page-container">
        <div class="login-card">
            <div class="logo">
                <img src="<?= base_url('fotos/logo02.png') ?>" alt="Logo">
            </div>

            <div class="avatar">
                <span class="material-icons">person_add</span>
            </div>
            
            <?php if (isset($validation) && $validation->getErrors()): ?>
                <div class="errors">
                    <ul>
                        <?php foreach ($validation->getErrors() as $error): ?>
                            <li><?= esc($error) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('cadastro') ?>" method="post">
                <?= csrf_field() ?> <div class="profile-selector-group">
                    <label class="group-label">Eu sou:</label>
                    <div class="profile-options">
                        <div class="profile-option">
                            <input type="radio" id="perfilPaciente" name="tipo" value="paciente" <?= old('tipo') == 'paciente' ? 'checked' : '' ?> required>
                            <label for="perfilPaciente">Paciente</label>
                        </div>
                        <div class="profile-option">
                            <input type="radio" id="perfilPsicologa" name="tipo" value="psicologa" <?= old('tipo') == 'psicologa' ? 'checked' : '' ?> required>
                            <label for="perfilPsicologa">Psicóloga</label>
                        </div>
                    </div>
                </div>

                <div class="input-group">
                    <label for="nome">Nome Completo</label>
                    <input type="text" id="nome" name="nome" value="<?= old('nome') ?>" required>
                </div>

                <div class="input-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" value="<?= old('email') ?>" required>
                </div>

                <div class="input-group">
                    <label for="senha">Crie uma Senha</label>
                    <input type="password" id="senha" name="senha" required>
                </div>

                <div class="input-group">
                    <label for="confirmar_senha">Confirme sua Senha</label>
                    <input type="password" id="confirmar_senha" name="confirmar_senha" required>
                </div>

                <button type="submit" class="login-button">Cadastrar</button>
            </form>
            
            <div class="extra-links">
                <a href="<?= base_url('login')?>">Já tem uma conta? Faça login!</a>
            </div>
        </div>
        </div>

    </body>
</html>