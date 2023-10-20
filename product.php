<?php
include_once('./assets/php/data/var.php');

$productUser = $_GET['product'];
$productImg = '';
$productName = '';
$productDesc = '';
$productPrice = '';
$productCategory = '';
$productMap = [];

foreach ($data as $dt) {
    foreach ($dt[1] as $product) {
        $productMap[$product->getID()] = $product;
    }
}

if (isset($productMap[$productUser])) {
    $product = $productMap[$productUser];
    $productImg = $product->getImg();
    $productName = $product->getName();
    $productDesc = $product->getDesc();
    $productPrice = $product->getPrice();
    $productCategory = $product->getCategory();
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
        <section class="mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5 col-lg-5 col-12 col-sm-12">
                        <div class="text-center w-20" id="clicked-product-img"><img src="<?= $productImg ?>" style="width: 400px;"></div>
                    </div>
                    <div class="col-md-7 col-lg-7 col-12 col-sm-12">
                        <div class="row mb-5">
                            <div class="col">
                                <div class="row mt-4 mt-sm-4 mt-md-0 mt-lg-0">
                                    <div class="col">
                                        <div class="fs-2" id="clicked-product-title"><?= $productName ?></div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <div id="clicked-product-description"><?= $productDesc ?></div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <div id="clicked-product-price"><?= $productPrice ?></div>
                                    </div>
                                </div>
                                <div class="row mt-2 row-cols-auto">
                                    <div class="col">
                                        <p class="fs-4">Quantidade:</p>
                                    </div>
                                    <div class="col"> 
                                        <div class="">
                                            <select class="form-select" id="quantity">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="alert" id="alert"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col">
                                <div class="text-center">
                                    <a class="btn btn-dark page-font btn-lg p-2" type="button" href="./cart.php?product=<?= $productUser ?>" id="add-to-cart-btn">
                                        <i class="bi bi-cart-fill text-white"></i>
                                        Eu quero!
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include_once('./assets/php/components/footer.php') ?>
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="text/javascript">
        const btnIWant = $('#add-to-cart-btn')
        const alert = $('#alert')
        
        btnIWant.addEventListener('click', (e) => {
            e.preventDefault()
            const quantitySelect = $('#quantity')
            const selectedQuantity = quantitySelect.options[quantitySelect.selectedIndex].value
            alert.classList.add("alert-warning")
            alert.innerHTML = "<p>O item foi adicionado ao carrinho</p>"

            setInterval(() => {
                let url = btnIWant.href
                url += "&quantity=" + selectedQuantity
                window.location.href = url
            }, 1000)
        })
    </script>
</body>
</html>
