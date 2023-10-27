<?php
include_once('./assets/php/data/var.php');

$userInSession = '';

if (isset($_SESSION['userInSession']['email'])) {
    $userInSession = $_SESSION['userInSession']['email'];
}

$cartProducts = $_SESSION['cartProducts'];
$userOrders = $_SESSION['userOrders'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userStreet = $_POST['street'];
    $userStreetNumber = $_POST['street-number'];
    $userDistrict = $_POST['district'];
    $userZipCode = $_POST['zip-code'];
    $userState = $_POST['state'];
    $userCity = $_POST['city'];

    $userPaymentMethod = $_POST['payment-form-select'];

    $userCardBrand = ($userPaymentMethod === 'credit' || $userPaymentMethod === 'debit') ? $_POST['card-brand'] : '';
    $userCardholderName = ($userPaymentMethod === 'credit' || $userPaymentMethod === 'debit') ? $_POST['cardholder-name'] : '';
    $userCardNumber = ($userPaymentMethod === 'credit' || $userPaymentMethod === 'debit') ? $_POST['card-number'] : '';
    $userSecurityCode = ($userPaymentMethod === 'credit' || $userPaymentMethod === 'debit') ? $_POST['security-code'] : '';
    $userExpirationDate = ($userPaymentMethod === 'credit' || $userPaymentMethod === 'debit') ? $_POST['expiration-date'] : '';
    $userInstallments = ($userPaymentMethod === 'credit') ? $_POST['installments'] : '';

    if ($userPaymentMethod == 'credit') {
        $userPaymentMethod = 'Cartão de Crédito';
    } else if ($userPaymentMethod == 'debit') {
        $userPaymentMethod = 'Cartão de Débito';
    } else {
        $userPaymentMethod = 'Pix';
    }

    $totalPriceCart = number_format($_SESSION['totalPriceCart'], 2, ',','.');

    if (strpos($userInstallments, '5X') !== false ) {
        $totalPriceCart = number_format(((($_SESSION['totalPriceCart']/5) + $interestOn5Installments) * 5), 2, ',','.');
    } else if (strpos($userInstallments, '6X') !== false ) {
        $totalPriceCart = number_format(((($_SESSION['totalPriceCart']/6) + $interestOn6Installments) * 6), 2, ',','.');
    }

    $userAddress = array(
        'street' => $userStreet, 
        'streetNumber' => $userStreetNumber, 
        'district' => $userDistrict, 
        'zipCode' => $userZipCode, 
        'state' => $userState, 
        'city' => $userCity
    );

    $userPaymentInfo = array(
        'paymentMethod' => $userPaymentMethod, 
        'cardBrand' => $userCardBrand, 
        'cardholderName' => $userCardholderName, 
        'cardNumber' => $userCardNumber, 
        'securityCode' => $userSecurityCode, 
        'expirationDate' => $userExpirationDate, 
        'installments' => $userInstallments, 
        'subtotal' => $_SESSION['totalPriceCart'], 
        'total' => $totalPriceCart
    );

    $order = array(
        'address' => $userAddress, 
        'paymentInfo' => $userPaymentInfo, 
        'cartProducts' => $cartProducts
    );
    $userOrders[$userInSession][] = $order;
    $_SESSION['userOrders'] = $userOrders;  

    unset($_SESSION['cartProducts']);
    $_SESSION['qntProductsTotal'] = 0;
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
        <section>
            <div class="p-3">
                <div class="row">
                    <div class="col">
                        <p class="bolder-font-700 fs-2">Compra realizada com sucesso!
                            <br>
                            Agora é só esperar!
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a class="btn bg-color-black rounded-pill text-white p-3" href="././index.php">Clique aqui para voltar a comprar</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include_once('./assets/php/components/footer.php') ?>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <?php include_once('./assets/php/main.php') ?>
</body>
</html>