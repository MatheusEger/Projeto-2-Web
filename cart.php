<?php
include_once('./assets/php/data/var.php');

$cartProducts = $_SESSION['cartProducts'];

if (isset($_GET['product'])) {
    global $totalPrice;
    $productId = $_GET['product'];
    $quantity = isset($_GET['quantity']) ? (int)$_GET['quantity'] : 1;
    $_SESSION['qntProductsTotal'] += $quantity;
    $cartObj = null;

    header('Location: ./cart.php');

    foreach ($data as $dt) {
        $products = $dt[1];
        foreach ($products as $product) {
            if ($product->getID() == $productId) {
                $cartObj = new Cart(
                    $product->getID(),
                    $product->getImg(),
                    $product->getName(),
                    $quantity,
                    $product->getPrice()
                );
                break 2;
            }
        }
    }

    if (empty($cartProducts)) {
        $_SESSION['cartProducts'][] = $cartObj;
    } else {   
        foreach ($cartProducts as $item) {
            if ($item->getProductID() == $productId) {
                $item->setQnt($item->getQnt() + $quantity);
                break;
            } else {
                $_SESSION['cartProducts'][] = $cartObj;
                break;
            }
        }
    }
}

$totalPrice = 0;
foreach ($cartProducts as &$products) {
    $price = str_replace(',','.', $products->getPrice());
    $totalPrice += ((float)$price * $products->getQnt());
}
$_SESSION['totalPriceCart'] = $totalPrice;
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
        <section id="cart-container">
            <?php if (!empty($cartProducts)) : ?>
                <div class="container pb-3 pt-3 p-sm-5 p-md-5 p-lg-5">
                    <div class="row mb-5">
                        <div class="col">
                            <div class="text-center">
                                <div class="alert" id="alert"></div>
                                <h3 class="fs-4 mb-5 bolder-font-700">Meu carrinho</h3>
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th class="bolder-font-700 h6">Nome do produto</th>
                                            <th class="bolder-font-700 h6">Quantidade</th>
                                            <th class="bolder-font-700 h6">Preço</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="cart-products-container">
                                        <?php foreach ($cartProducts as $cartProduct) : ?>
                                            <tr id="row_<?= $cartProduct->getProductID() ?>">
                                                <td>
                                                    <img src="<?= $cartProduct->getImg() ?>" style="min-width: 7vw; max-width: 12vw;">
                                                </td>
                                                <td>
                                                    <span><?= $cartProduct->getProductName() ?></span>
                                                </td>
                                                <td>
                                                    <span class="bolder-font-700"><?= $cartProduct->getQnt() ?></span>
                                                </td>
                                                <td>
                                                    <span>R$<?= $cartProduct->getPrice() ?></span>
                                                </td>
                                                <td>
                                                    <a class="text-reset" href="./remove-product.php?product=<?= $cartProduct->getProductID() ?>"><i class="bi bi-trash-fill fs-5 cursor-pointer"></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex justify-content-center">
                                <p class="fs-3 bolder-font-700">Valor total: R$<?= number_format($totalPrice, 2,',','.') ?> </p>
                                &nbsp;
                                <p class="fs-3" id="total"></p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            <a class="btn btn-dark text-decoration-none" href="index.php">Voltar às compras</a>
                        </div>
                        <div>
                            <a href="./payment.php" class="btn btn-dark">Finalizar pedido</a>
                        </div>
                    </div>
                </div>
            <?php else : ?>
                <p class="bolder-font-700 text-center fs-3 m-5">Você ainda não escolheu nenhum produto</p>
            <?php endif; ?>
        </section>
    </main>
    <?php include_once('./assets/php/components/footer.php') ?>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
