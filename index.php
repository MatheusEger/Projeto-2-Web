<?php
include_once('./assets/php/data/var.php');

$mainOffers = array($stranger1, $hp4, $marvel1, $disney14);
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
    <div>
        <?php include_once('./assets/php/components/navbar.php') ?>

        <header>
            <div id="demo" class="carousel slide bg-dark" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <?php foreach ($data as $key => $dt) : ?>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="<?= $key ?>" class="<?= $key === 0 ? 'active' : '' ?>"></button>
                    <?php endforeach; ?>
                </div>
                
                <div class="carousel-inner">
                    <?php foreach ($data as $key => $dt) : 
                            $category = reset($dt);
                    ?>
                        <div class="carousel-item <?= $key === 0 ? 'active' : '' ?>">
                            <a class="text-decoration-none" href="./products.php?category=<?= $category->getName() ?>">
                                <div class="carousel-content text-light my-5 my-md-0 d-flex flex-column flex-md-row align-items-center justify-content-center">
                                    <div class="d-flex flex-column row-gap-2">
                                        <h3 class="fs-1"><?= strtoupper($category->getName()) ?></h3>
                                        <span><?= $category->getDesc() ?></span>
                                    </div>
                                    <img src="./assets/img/<?= $category->getImg() ?>" alt="<?= $category->getName() ?>" class="d-block cursor-pointer opacity carousel-img">
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </header>
        <main>
            <section class="about-us bg-black text-light w-100 d-flex align-items-center">
                <div class="img-wrapper me-2">
                    <span class="bg-warning d-inline-block cursor-pointer">
                        <img src="./assets/img/eleven-st.png" alt="Eleven Stranger Things">
                    </span>
                </div>
                <div class="ms-5">
                    <h3 class="fs-1 mb-5">FunkoStore</h3>
                    <div>
                        <p>
                            Bem-vindo à FunkoMania, sua loja de destino para os amantes de Funko Pop! Somos uma comunidade de colecionadores apaixonados que oferece uma ampla seleção de Funkos de todas as suas franquias favoritas.
                        </p>
                        <p>
                            Nossa equipe é formada por conhecedores ávidos prontos para ajudá-lo a encontrar as peças perfeitas para sua coleção ou o presente ideal para outros fãs fervorosos.
                        </p>
                        <p>
                            Além dos Funko Pops, oferecemos uma variedade de mercadorias colecionáveis relacionadas, como camisetas e canecas, para você exibir seu amor por seus personagens favoritos.
                        </p>
                        <p>
                            Na FunkoMania, acreditamos em compartilhar histórias, paixões e memórias com nossos clientes. Este é um lugar onde os amantes de Funko se reúnem para compartilhar dicas, descobrir lançamentos emocionantes e celebrar juntos essa forma de arte colecionável.
                        </p>
                        <p>
                            Obrigado por ser parte da comunidade FunkoMania. Estamos empolgados em fazer parte de sua jornada de colecionador e ansiosos para ajudá-lo a encontrar os Funkos dos seus sonhos.
                        </p>
                    </div>
                </div>
            </section>
            <section class="main-offers bg-dark p-5">
                <h3 class="main-offers-title text-white mb-5">Principais Ofertas</h3>
                <div class="row main-offers-wrapper g-3">
                    <?php foreach ($mainOffers as $offer) : ?>
                        <div class="col-md-3">
                            <a class="text-decoration-none" href="./product.php?product=<?= $offer->getID() ?>">
                                <div class="card bg-black text-light text-center cursor-pointer">
                                    <div><img class="card-img-top text-center" src="<?= $offer->getImg() ?>" alt="<?= $offer->getName() ?>"></div>
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $offer->getName() ?></h5>
                                        <p class="card-text"><?= $offer->getPrice() ?></p>
                                        <button class="btn btn-main-offer text-decoration-none">Adicionar ao Carrinho</button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
            <section class="subscribe bg-warning w-100 d-flex align-items-center justify-content-center">
                <div class="ms-1">
                    <div>
                        <div class="mb-5">
                            <h3 class="fs-1">Inscreva-se</h3>
                            <span>Se inscreva para ser notificado</span>
                        </div>
                        <form class="d-flex flex-column row-gap-2">
                            <div>
                                <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <button class="btn btn-dark rounded-pill">Inscrever-me</button>
                        </form>
                    </div>
                </div>
                <div id="imageCarousel" class="carousel slide ms-5" style="width: 410px; height: 410px; overflow: hidden;" data-bs-ride="carousel" data-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="img-wrapper me-2">
                                <span class="bg-dark d-inline-block cursor-pointer">
                                    <img class="m-0" src="./assets/img/harley-dc.png" alt="Eleven Stranger Things">
                                </span>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="img-wrapper me-2">
                                <span class="bg-dark d-inline-block cursor-pointer">
                                    <img class="m-0" src="./assets/img/harry-hp.png" alt="Descrição da segunda imagem">
                                </span>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="img-wrapper me-2">
                                <span class="bg-dark d-inline-block cursor-pointer">
                                    <img class="m-0" src="./assets/img/jack-disney.png" alt="Descrição da terceira imagem">
                                </span>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#imageCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#imageCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </section>
        </main>

        <?php include_once('./assets/php/components/footer.php') ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
