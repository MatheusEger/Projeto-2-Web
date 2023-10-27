<?php
include_once('./assets/php/data/var.php');

$userOrders = array();

if (isset($_SESSION['userInSession']['email'])) {
    $userInSession = $_SESSION['userInSession']['email'];
    
    if (!(empty($_SESSION['userOrders']))) {
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
            <h2 class="bolder-font-700 m-5 text-center">Meus pedidos</h2>
            <?php foreach($userOrders as $key => $order) : ?>
                    <div class="container p-3 mb-5 border rounded">
                        <div class="row">
                            <?php foreach($order['cartProducts'] as $product) : ?>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-8">
                                    <div class="row">
                                        <div class="col">
                                            <img src="<?= $product->getImg()?>" style="max-width: 10vw;">
                                            <span class="bolder-font-500"><?= $product->getProductName()?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                                
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 pt-3">
                                <div class="row mb-3">
                                    <div class="col">
                                        <a class="btn btn-dark d-block" href="./order.php?orderId=<?=$key?>">Ver detalhes do pedido</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <a class="btn btn-light d-block w-100" href="./cancel-order.php?orderId=<?=$key?>">Cancelar pedido</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p class="bolder-font-700 m-5 text-center h3">Você ainda não possui nenhum pedido.</p>
        <?php endif; ?>
    </main>
    <?php include_once('./assets/php/components/footer.php') ?>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <?php include_once('./assets/php/main.php') ?>
</body>
</html>
