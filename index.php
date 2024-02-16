<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login SIRPI</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h2 class="logo">SIRPI</h2>
        <nav class="navigation">
            <a href="#">Home</a>
            <a href="#">Sobre</a>
            <a href="#">Contato</a>
            <button class="btnLogin-popup">Login</button>
        </nav>
    </header>

    
        <?php
        if(isset($_SESSION['nao_autenticado'])):
        ?>
            <script src="sweetalerta2.js"></script>
            <script src="custum.js"></script>
        
        <?php
        endif;
        unset($_SESSION['nao_autenticado']);
        ?>


    <div class="wrapper">
        <span class="icon-close">
            <ion-icon name="close"></ion-icon>
        </span>

        <div class="form-box login">
            <h2>Login</h2>
            <form id="form-login" action="login.php" method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="nome" required>
                    <label class="form-label">Usuário</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="senha" required>
                    <label class="form-label">Senha</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">
                    Lembrar de mim</label>
                    <a href="#">Lembrar senha?</a>
                </div>
                <button id="btn-sesion" type="submit" class="btn">Login</button>
                <div class="login-register">
                    
                    <p><!--Não tem conta?--> <a href="#"
                    class="register-link"><!--Criar conta--></a></p>
                    
                </div>
                
            </form>
        </div>

        <div class="form-box register">
            <h2>Cadastrar</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" required>
                    <label>Usuário</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" required>
                    <label>email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required>
                    <label>Senha</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">
                    Aceito os termos & Condições </label>
                </div>
                <button type="submit" class="btn">Cadastrar</button>
                
                <div class="login-register">
                    <p>Já tem cadastro? <a href="#"
                    class="login-link">Login</a></p>
                </div> 
            </form>
        </div>
    </div>

    <script src="script.js"></script>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>