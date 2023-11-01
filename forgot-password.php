<?php
include_once('./assets/php/data/var.php');

$returnMessage = '';
$successedRedefinition = false;
$users = $_SESSION['users'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    foreach ($users as $user) {
        if ($user->getEmail() == $email) {
            $user->setPassword($password);
            $returnMessage = 'Senha redefinida com sucesso!';
            $successedRedefinition = true;
        } else {
            $successedRedefinition = false;
            $returnMessage = 'Esse e-mail não existe, tente outro!';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./assets/img/logo/alien-head.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <title>FunkoMania</title>
</head>
<body class="user-login">
    <main class="p-5 d-flex justify-content-center align-items-center min-vh-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card shadow p-4">
                        <h3 class="mb-4">Redefinir Senha</h3>
                        <form class="form form-register" method="post">
                            <div class="mb-3">
                                <input type="text" class="form-control register-input" id="email" name="email" placeholder="Digite seu endereço de e-mail" maxlength="50">
                                <div class="feedback-email"></div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <input type="password" class="form-control register-input" id="password" name="password" placeholder="Redefina sua senha aqui" maxlength="50">
                                    <span class="input-group-text cursor-pointer password-hidden password-btn"><i class="bi bi-eye-slash-fill"></i></span>
                                </div>
                                <div class="feedback-password"></div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <input type="password" class="form-control register-input" id="password2" name="password2" placeholder="Confirme sua senha" maxlength="50">
                                    <span class="input-group-text cursor-pointer password-hidden password-btn2"><i class="bi bi-eye-slash-fill"></i></span>
                                </div>
                                <div class="feedback-password2"></div>
                            </div>
                            <?php if (!empty($returnMessage)) : ?>
                                <div class="alert alert-warning" id="alert"><?= $returnMessage ?></div>
                            <?php endif; ?>
                            <div class="mb-3">
                                <button class="btn btn-dark w-100" type="submit">Redefinir Senha</button>
                            </div>
                        </form>
                        <div class="mb-3 text-center">
                            <a class="login-link" href="./login.php">Já tem uma conta? Faça login aqui</a>
                        </div>
                        <div>
                            <a class="btn btn-dark" href=".">Voltar para página inicial</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./assets/js/main.js"></script>
    <?php if ($successedRedefinition) : ?>
        <script>
            setTimeout(() => { 
                window.location.href = './login.php'
            }, 1500)
        </script>
    <?php 
        exit;
        endif; ?>
</body>
</html>
