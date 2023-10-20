<?php
include_once('./assets/php/data/var.php');

$returnMessage = '';
$users = $_SESSION['users'];
$user = null;
$successedRegistration = false;

function createUser($userName, $email, $password, $password2) {
    global $successedRegistration;

    if ($password == $password2) {
        $user = new User(
            $userName,
            $email,
            $password
        );

        $_SESSION['users'][] = $user;   
        $successedRegistration = true;
        return 'Usuário cadastrado com sucesso!';
    } else {
        $successedRegistration = false;
        return 'As senhas não conferem';
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = $_POST["userName"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];

    if (empty($userName) || empty($email) || empty($password) || empty($password2)) { 
        $returnMessage = 'Preencha os campos obrigatórios';
    } else {
        if (empty($users)) {
            $returnMessage = createUser($userName, $email, $password, $password2);
        } else {
            foreach ($users as $user) {
                if ($user->getEmail() == $email) {
                    $returnMessage = 'Esse usuário já existe, por favor tente um e-mail diferente';
                    break;
                } else {
                    $returnMessage = createUser($userName, $email, $password, $password2);
                }      
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
                <input class="form-control" name="email" id="email" placeholder="digite seu endereço de e-mail">
                <input class="form-control" name="userName" id="userName" placeholder="digite seu nome">
                <input class="form-control" name="password" id="password" placeholder="crie sua senha aqui">
                <input class="form-control" name="password2" id="password2" placeholder="confirme sua senha">
            </div>
            <?php if (!empty($returnMessage)) : ?>
                <span class="alert" id="alert"><?= $returnMessage ?></span>
            <?php endif; ?>
            <div class="d-flex justify-content-between mt-5">
                <button class="btn btn-dark" type="submit">Cadastrar</button>
                <div><a class="btn btn-dark" href=".">Voltar para página inicial</a></div>
            </div>
        </form>
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
    <?php
        if ($successedRegistration == true) { 
            echo "<script>
                    setTimeout(() => { 
                        window.location.href = './login.php'
                    }, 1500)
                </script>";
            exit;
        }
    ?>
</body>
</html>
