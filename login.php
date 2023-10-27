<?php
include_once('./assets/php/data/var.php');

$returnMessage = '';
$users = $_SESSION['users'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) { 
        $returnMessage = 'Preencha os campos obrigatórios';
    } else {
        foreach ($users as $user) {
            $userName = $user->getName();
            $userEmail = $user->getEmail();
            $userPassword = $user->getPassword();

            if (($userEmail == $email) && ($userPassword == $password)) {

                $userInSession = array('name' => $userName, 'email' => $userEmail);

                $_SESSION['userInSession'] = $userInSession;

                header('Location: ./index.php');
            } else {
                $returnMessage = 'Login ou senha incorretos';
            }
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
                        <h3 class="mb-4">Login</h3>
                        <form class="form" method="post" action="#">
                            <div class="mb-3">
                                <input class="form-control" id="email" name="email" type="email" placeholder="Digite seu endereço de e-mail">
                            </div>
                            <div class="mb-3">
                                <input class="form-control" id="password" name="password" type="password" placeholder="Digite sua senha">
                            </div>
                            <?php if (!empty($returnMessage)) : ?>
                                <div class="alert alert-warning"><?= $returnMessage ?></div>
                            <?php endif; ?>
                            <div class="mb-3">
                                <button class="btn btn-dark w-100" type="submit">Acessar</button>
                            </div>
                        </form>
                        <div class="mb-3 text-center">
                            <p>Não tem uma conta? <a class="create-account-link" href="./create-account.php">Crie aqui</a></p>
                            <a href="./forgot-password.php">Esqueci minha senha</a>
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
</body>
</html>
