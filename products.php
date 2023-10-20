<?php
include_once('./assets/php/data/var.php');

$categoryUser = $_GET['category'];
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
        <h1 class="fs-1"><?= $categoryUser ?></h1>
        <div class="products row g-3">
            <?php foreach ($data as $dt) : ?>
                <?php if ($dt[0]->getName() == $categoryUser) : ?>
                    <?php foreach ($dt[1] as $product) : ?>
                        <div class="col-md-3">
                            <a class="text-decoration-none" href="./product.php?product=<?= $product->getID() ?>">
                                <div class="card bg-black text-light text-center cursor-pointer">
                                    <div><img class="card-img-top text-center" src="<?= $product->getImg() ?>" alt="<?= $product->getName() ?>"></div>
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $product->getName() ?></h5>
                                        <p class="card-text"><?= $product->getPrice() ?></p>
                                        <button class="btn btn-main-offer">Adicionar ao Carrinho</button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </main>
    <?php include_once('./assets/php/components/footer.php') ?>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
