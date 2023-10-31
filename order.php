<?php
include_once('./assets/php/data/var.php');

$userOrders = array();

if (isset($_GET['orderId']) && isset($_SESSION['userInSession']['email'])) {
    $orderId = $_GET['orderId'];
    $userInSession = $_SESSION['userInSession']['email'];

    if (isset($_SESSION['userOrders'][$userInSession])) {
        $userOrders = $_SESSION['userOrders'][$userInSession];
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
    <?php include_once('./assets/php/components/navbar.php') ?>
    <main class="p-5">
    <?php if (!(empty($userOrders))) : ?>
        <section>
            <div class="container my-2 m-lg-5">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-8">
                        <div class="container mb-1 p-2 p-md-6 p-lg-5 border rounded">
                            <div class="row">
                                <div class="col">
                                    <p class="fw-bolder">Endereço de entrega</p>
                                    <p class="lh-1"><?= $userOrders[$orderId]['address']['street'] ?>, <?= $userOrders[$orderId]['address']['streetNumber'] ?>. <?= $userOrders[$orderId]['address']['district'] ?></p>
                                    <p class="lh-1">CEP: <?= $userOrders[$orderId]['address']['zipCode'] ?></p>
                                    <p class="lh-1"><?= $userOrders[$orderId]['address']['city'] ?>, <?= $userOrders[$orderId]['address']['state'] ?></p>
                                </div>
                                <div class="col" id="card-info">
                                    <p class="fw-bolder">Forma de pagamento</p>
                                    <p class="lh-1"><?= $userOrders[$orderId]['paymentInfo']['paymentMethod'] ?></p>
                                    <?php 
                                        if (
                                            !(empty($userOrders[$orderId]['paymentInfo']['cardBrand'])) &&
                                            !(empty($userOrders[$orderId]['paymentInfo']['cardNumber'])) &&
                                            !(empty($userOrders[$orderId]['paymentInfo']['expirationDate']))
                                        ) : 
                                        $cardBrand = 'Bandeira: ' . strtoupper($userOrders[$orderId]['paymentInfo']['cardBrand']);
                                        $cardNumber = 'Cartão final: **** ' . substr($userOrders[$orderId]['paymentInfo']['cardNumber'], -4);
                                        $expirationDate = 'Data de Validade: ' . $userOrders[$orderId]['paymentInfo']['expirationDate'];
                                    ?>
                                        <p class="lh-1"><?= $cardBrand ?></p>
                                        <p class="lh-1"><?= $cardNumber ?></p>
                                        <p class="lh-1"><?= $expirationDate ?></p>
                                    <?php endif; ?>
                                    <?php if ($userOrders[$orderId]['paymentInfo']['paymentMethod'] == 'Cartão de Crédito') : 
                                        $installments = $userOrders[$orderId]['paymentInfo']['installments'];
                                    ?>
                                        <p class="lh-1"><?= $installments ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="col" id="order-info">
                                    <p class="fw-bolder">Resumo do pedido</p>
                                    <p class="lh-1">Subtotal: R$<?= $userOrders[$orderId]['paymentInfo']['subtotal'] ?></p>
                                    <p class="lh-1">Entrega: FRETE GRÁTIS</p>
                                    <p class="lh-1 fw-bolder">Total: R$<?= $userOrders[$orderId]['paymentInfo']['total'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="container p-2 border rounded text-center">
                            <div class="row mb-3">
                                <div class="col">
                                    <?php foreach($userOrders[$orderId]['cartProducts'] as $product) : ?>
                                        <img src="<?=$product->getImg()?>" style="max-width: 10vw;">
                                        <span class="fw-bolder"><?=$product->getProductName()?></span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </section>
    <?php else : ?>
        <p class="bolder-font-700 m-5 text-center h3">Não há nada aqui.</p>
    <?php endif; ?>
    </main>
    <?php include_once('./assets/php/components/footer.php') ?>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <?php include_once('./assets/php/main.php') ?>
</body>
</html>