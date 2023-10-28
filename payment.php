<?php
include_once('./assets/php/data/var.php');

if (empty($_SESSION['userInSession'])) { 
    header('Location: ./login.php');
} 

$cartProducts = '';
if (!empty($_SESSION['cartProducts'])) {
    $cartProducts = $_SESSION['cartProducts'];
    $totalPriceCart = $_SESSION['totalPriceCart'];
    $twoInstallments = ($totalPriceCart / 2);
    $threeInstallments = ($totalPriceCart / 3);
    $fourInstallments = ($totalPriceCart / 4);
    $fiveInstallments = (($totalPriceCart / 5) + $interestOn5Installments);
    $sixInstallments = (($totalPriceCart / 6) + $interestOn6Installments);
    
    $totalPriceCartFormatted = 'R$' . number_format($totalPriceCart, 2, ',','.');
    $totalPrice5xFormatted = $fiveInstallments * 5;
    $totalPrice5xFormatted = 'R$' . number_format($totalPrice5xFormatted, 2, ',','.');
    $totalPrice6xFormatted = $sixInstallments * 6;
    $totalPrice6xFormatted = 'R$' . number_format($totalPrice6xFormatted, 2, ',','.');
    
    $twoInstallmentsFormatted = 'R$' . number_format($twoInstallments, 2, ',','.');
    $threeInstallmentsFormatted = 'R$' . number_format($threeInstallments, 2, ',','.');
    $fourInstallmentsFormatted = 'R$' . number_format($fourInstallments, 2, ',','.');
    $fiveInstallmentsFormatted = 'R$' . number_format($fiveInstallments, 2, ',','.');
    $sixInstallmentsFormatted = 'R$' . number_format($sixInstallments, 2, ',','.');
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
        <?php if (!(empty($cartProducts))) : ?>
            <form class="form" method="post" action="./completed-purchase.php" id="payment-form">
                <div class="form-section">
                    <h3>ENDEREÇO</h3>
                    <div class="address" id="address">
                        <div class="mb-3">
                            <input type="text" name="street" id="street" class="form-control" placeholder="rua" maxlength="80">
                            <div class="feedback-street"></div>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="street-number" id="street-number" class="form-control" placeholder="numero da rua" maxlength="5">
                            <div class="feedback-street-number"></div> 
                        </div>
                        <div class="mb-3">
                            <input type="text" name="district" id="district" class="form-control" placeholder="bairro" maxlength="50">
                            <div class="feedback-district"></div>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="zip-code" id="zip-code" class="form-control" placeholder="cep">
                            <div class="feedback-zip-code"></div>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="state" id="state" class="form-control" placeholder="uf">
                            <div class="feedback-state"></div>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="city" id="city" class="form-control" placeholder="cidade" maxlength="50">
                            <div class="feedback-city"></div>
                        </div>
                    </div>
                </div>
                <div class="form-section" id="payment-form-wrapper" style="display: none;">
                    <h3>FORMA DE PAGAMENTO</h3>
                    <div class="payment-form" id="payment-form">
                        <select class="form-select mb-3" name="payment-form-select" id="payment-form-select">
                            <option value="default" selected>Selecione o tipo</option>
                            <option value="credit">Cartão de Crédito</option>
                            <option value="debit">Cartão de Débito</option>
                            <option value="pix">Pix</option>
                        </select>
                        <div class="mb-3" id="card-brands" style="display: none;">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="card-brand" id="mastercard" value="mastercard" checked>
                                <a href="https://www.flaticon.com/free-icons/mastercard" title="mastercard icons">
                                    <label class="form-check-label" for="mastercard"> 
                                        <img src="./assets/img/mastercard.png" style="max-width: 35px;">
                                    </label>
                                </a>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="card-brand" id="visa" value="visa">
                                <a href="https://www.flaticon.com/free-icons/visa" title="visa icons">
                                    <label class="form-check-label" for="visa">
                                        <img src="./assets/img/visa.png" style="max-width: 35px;">
                                    </label>
                                </a>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="card-brand" id="amex" value="amex">
                                <a href="https://www.flaticon.com/free-icons/american-express" title="american express icons">
                                    <label class="form-check-label" for="amex">
                                        <img src="./assets/img/american-express.png" style="max-width: 35px;">
                                    </label>
                                </a>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="card-brand" id="discover" value="discover">
                                <a href="https://www.flaticon.com/free-icons/discover" title="discover icons">
                                    <label class="form-check-label" for="discover">
                                        <img src="./assets/img/discover.png" style="max-width: 35px;">
                                    </label>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-section" id="payment-form-info-wrapper" style="display: none;">
                    <h3>INFORMAÇÕES DE PAGAMENTO</h3>
                    <div>
                        <div id="pix-info" style="display: none;">
                            <div>
                                <span>Envie para a nossa chave dentre o período de 24hr: <chave> </span>
                                <div>
                                    <span>Ou envie pelo QRCode</span><br>
                                    <a href="https://www.flaticon.com/free-icons/qr-code" title="qr code icons">
                                        <img src="./assets/img/qr-code.png" style="max-width: 150px;">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="card-info" style="display: none;">
                            <div class="mb-3">
                                <label for="cardholder-name">Nome no cartão</label>
                                <input type="text" name="cardholder-name" id="cardholder-name" class="form-control" placeholder="nome no cartão" type="text" maxlength="40">
                                <div class="feedback-cardholder-name"></div>
                            </div>
                            <div class="mb-3">
                                <label for="card-number">Número</label>
                                <input type="text" name="card-number" id="card-number" class="form-control" placeholder="número" type="text">
                                <div class="feedback-card-number"></div>
                            </div>
                            <div class="mb-3">
                                <label for="security-code">Código</label>
                                <input type="text" name="security-code" id="security-code" class="form-control" placeholder="código" type="text">
                                <div class="feedback-security-code"></div>
                            </div>
                            <div class="mb-3">
                                <label for="expiration-date">Data de Validade</label>
                                <input type="text" name="expiration-date" id="expiration-date" class="form-control" placeholder="mm/aaaa">
                                <div class="feedback-expiration-date"></div>
                            </div>
                        </div>
                        <div id="installments-wrapper" style="display: none;">
                            <label for="installments-select">Parcelas</label>
                            <select class="form-select" name="installments" id="installments-select">
                                <option value="À VISTA NO VALOR DE <?= $totalPriceCartFormatted ?>" selected>À VISTA NO VALOR DE <?= $totalPriceCartFormatted ?></option>
                                <option value="2X SEM JUROS DE <?= $twoInstallmentsFormatted ?>">2X SEM JUROS DE <?= $twoInstallmentsFormatted ?></option>
                                <option value="3X SEM JUROS DE <?= $threeInstallmentsFormatted ?>">3X SEM JUROS DE <?= $threeInstallmentsFormatted ?></option>
                                <option value="4X SEM JUROS DE <?= $fourInstallmentsFormatted ?>">4X SEM JUROS DE <?= $fourInstallmentsFormatted ?></option>
                                <option value="5X COM JUROS DE <?= $fiveInstallmentsFormatted ?>">5X COM JUROS DE <?= $fiveInstallmentsFormatted ?></option>
                                <option value="6X COM JUROS DE <?= $sixInstallmentsFormatted ?>">6X COM JUROS DE <?= $sixInstallmentsFormatted ?></option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-section mt-5" id="purchase-summary" style="display: none;">
                    <div class="mt-auto mb-auto position-relative">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-8">
                                    <div class="border border-dark rounded p-3">
                                        <h3 class="fs-4 m-3 bolder-font-700">Meus itens</h3>
                                        <table class="table table-borderless text-center table-responsive">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th class="bolder-font-700 h6">Nome do produto</th>
                                                    <th class="bolder-font-700 h6">Quantidade</th>
                                                    <th class="bolder-font-700 h6">Preço</th>
                                                </tr>
                                            </thead>
                                            <?php foreach ($cartProducts as $product) : ?>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <img src="<?= $product->getImg() ?>" style="min-width: 7vw; max-width: 12vw;">
                                                        </td>
                                                        <td>
                                                            <span><?= $product->getProductName() ?></span>
                                                        </td>
                                                        <td>
                                                            <span class="bolder-font-700"><?= $product->getQnt() ?></span>
                                                        </td>
                                                        <td>
                                                            <span>R$<?= $product->getPrice() ?></span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            <?php endforeach; ?>
                                        </table>
                                    </div>
                                </div>
                
                                <div class="col-12 col-lg-4">
                                    <div class="border border-dark rounded p-5">
                                        <div class="row mb-3">
                                            <div class="col">
                                                <h2 class="bolder-font-700">RESUMO DA COMPRA</h2>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <span>FORMA DE PAGAMENTO</span>
                                            </div>
                                            <div class="col">
                                                <span id="purchase-payment-form"></span>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <span>SUBTOTAL</span>
                                            </div>
                                            <div class="col">
                                                <span id="purchase-subtotal"></span>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <span>ENTREGA</span>
                                            </div>
                                            <div class="col">
                                                <span>Frete grátis</span>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <span>TOTAL</span>
                                            </div>
                                            <div class="col">
                                                <span id="purchase-total"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="text-center">
                                                    <button class="btn btn-dark" type="submit">Finalizar compra</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <div class="mt-5">
                <a class="btn btn-dark" href="./index.php">Voltar as compras</a>
            </div>
        <?php else : ?>
            <p class="bolder-font-700 text-center fs-3 m-5">Não há produtos no carrinho para realizar compras.</p>
        <?php endif; ?>
    </main>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./assets/js/main.js"></script>
    <script type="text/javascript">
        $(() => {
            $(document).ready(() => {
                /*section 1*/
                const address = $('#address input')

                /*section 2*/
                const paymentFormWrapper = $('#payment-form-wrapper')
                const paymentFormSelect = $('#payment-form-select')
                const cardBrands = $('#card-brands')
                const paymentFormSelectReturn = $('#payment-form-select-return')

                /*section 3*/
                const paymentFormInfoWrapper = $('#payment-form-info-wrapper')
                const pixInfo = $('#pix-info')
                const cardInfo = $('#card-info')
                const installmentsWrapper = $('#installments-wrapper')
                const installmentsSelect = $('#installments-select')
                const cardInfoForm = $('#card-info input')

                /*section 4*/
                const purchaseSummary = $('#purchase-summary')
                const purchasePaymentForm = $('#purchase-payment-form')
                const purchaseSubtotal = $('#purchase-subtotal')
                const purchaseTotal = $('#purchase-total')

                /*masks*/
                $('#street-number').mask('00000')
                $('#zip-code').mask('00000-000')
                $('#state').mask('SS')
                $('#card-number').mask('0000 0000 0000 0000')
                $('#security-code').mask('000')
                $('#expiration-date').mask('00/0000')

                fieldsWatch(address, display, paymentFormWrapper, displayNone, paymentFormWrapper)

                paymentFormSelect.on('change', () => {
                    display(paymentFormInfoWrapper)
                    let selectedPaymentForm = paymentFormSelect.val()
                    purchasePaymentForm.text($('#payment-form-select option:selected').text())
                    purchaseSubtotal.text('<?= $totalPriceCartFormatted ?>')
                    purchaseTotal.text('<?= $totalPriceCartFormatted ?>')

                    if (selectedPaymentForm == 'pix') {
                        displayNone(cardBrands)
                        display(pixInfo)
                        displayNone(cardInfo)
                        displayNone(installmentsWrapper)
                        display(purchaseSummary)
                    } else if (selectedPaymentForm == 'default') {
                        displayNone(cardBrands)
                        displayNone(paymentFormInfoWrapper)
                    } else {
                        display(cardBrands)
                        display(cardInfo)
                        displayNone(pixInfo)
                        displayNone(purchaseSummary)
                        fieldsWatch(cardInfoForm, display, purchaseSummary, displayNone, purchaseSummary)

                        if (selectedPaymentForm == 'credit') {
                            display(installmentsWrapper)
                            installmentsSelect.on('change', () => {
                                let installmentsText = $('#installments-select option:selected').text()

                                if (installmentsSelect.val().includes('5X')) {
                                    purchaseTotal.text('<?= $totalPrice5xFormatted ?>').append('<br>' + installmentsText)
                                } else if (installmentsSelect.val().includes('6X')) {
                                    purchaseTotal.text('<?= $totalPrice6xFormatted ?>').append('<br>' + installmentsText)
                                } else {
                                    if(!(installmentsSelect.val().includes('VISTA'))) {
                                        purchaseTotal.text('<?= $totalPriceCartFormatted ?>').append('<br>' + installmentsText)
                                    }
                                }
                            })
                        } else {
                            displayNone(installmentsWrapper)
                        }
                    }
                })
            }) 

            const display = (element) => {
                element.css('display', 'block')
            }

            const displayNone = (element) => {
                element.css('display', 'none')
            }

            const fieldsWatch = (element, functionToCall, elementToShow, functionToCall2, elementToHide) => {
                element.on('input', () => {
                    const allFieldsFilled = element.get().every(field => field.value !== '')
                    allFieldsFilled ? functionToCall(elementToShow) : functionToCall2(elementToHide)
                })
            }
        })
    </script>
</body>
</html>
