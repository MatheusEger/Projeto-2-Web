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
<body>
    <main class="p-5">
        <form class="form" method="post" action="#">  
            <div class="mb-5">
                <input class="form-control" id="email" name="email" placeholder="digite seu endereço de e-mail">
                <input class="form-control" id="password" name="password" placeholder="digite sua senha">
            </div>
            <?php if (!empty($returnMessage)) : ?>
                <span class="alert" id="alert"><?= $returnMessage ?></span>
            <?php endif; ?>
            <div class="d-flex justify-content-between mt-5">
                <button class="btn btn-dark" type="submit">Acessar</button>
                <div><a class="btn btn-dark" href=".">Voltar para página inicial</a></div>
            </div>
        </form>
        <div class="mt-5">
            <p>Não tem uma conta? <a href="./create-account.php">Crie aqui</a></p>
            <a href="./forgot-password.php">Esqueci minha senha</a>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(() => {
            const alert = $('#alert')
            
            if (alert.text().length > 0) {
                alert.addClass('alert-warning')
            }
        })
    </script>
</body>
</html>
