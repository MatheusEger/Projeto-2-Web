<?php
/*classes*/
include('./assets/php/classes/cart.php');
include('./assets/php/classes/category.php');
include('./assets/php/classes/funko.php');
include('./assets/php/classes/purchase.php');
include('./assets/php/classes/user.php');
/*end classes*/

include('./assets/php/data/funko-list.php');
session_start();

if (!isset($_SESSION['users'])) { 
    $_SESSION['users'] = array();
}

if(!isset($_SESSION['userInSession'])) {
    $_SESSION['userInSession'] = array();
}

if (isset($dataBase)) {
    $data = $dataBase;
}

if (!isset($_SESSION['cartProducts'])) {
    $_SESSION['cartProducts'] = array();
}

if (!isset($_SESSION['qntProductsTotal'])) {
    $_SESSION['qntProductsTotal'] = 0;
}

if(!isset($_SESSION['totalPriceCart'])) { 
    $_SESSION['totalPriceCart'] = 0;        
}
?>