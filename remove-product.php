<?php
include_once('./assets/php/data/var.php');

$productRemoved = false;
$returnMessage = '';

if (isset($_GET['product']) && !empty($_SESSION['cartProducts'])) {
    $productIdToRemove = $_GET['product'];
    $cartProducts = $_SESSION['cartProducts'];

    foreach ($cartProducts as $key => $cartProduct) {
        if ($cartProduct->getProductID() == $productIdToRemove) {
            $_SESSION['qntProductsTotal'] -= $cartProducts[$key]->getQnt();
            unset($cartProducts[$key]);
            $productRemoved = true;
        }
    }
}

if ($productRemoved) {
    $_SESSION['cartProducts'] = array_values($cartProducts);
    $returnMessage = 'Produto removido com sucesso';
} else {
    $returnMessage = 'Produto não encontrado no carrinho';
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
    <?php include_once('./assets/php/components/navbar.php') ?>
    <main class="p-5">
        <div><span><?= $returnMessage ?></span></div>
    </main>
    <?php include_once('./assets/php/components/footer.php') ?>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(() => {
            setTimeout(() => {
                window.location.href = './cart.php'
            }, 1500)
        })
    </script>

    <?php include_once('./assets/php/main.php') ?>
</body>
</html>